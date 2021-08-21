<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feed;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use App\Exceptions\DataNotFound;
use App\Http\Resources\CommentCollection;
use App\Http\Resources\CommentResource;
use App\Models\Artikel;
use App\Models\Forum;
use App\Models\Ebook;
use App\Models\User;
use App\Notifications\CommentNotification;
use Spatie\QueryBuilder\QueryBuilder;

/**
 * @group Comment
 * @authenticated
 */
class CommentController extends Controller
{
    /**
     * View Comment
     * untuk view comment
     * @urlParam id integer required id model
     * @urlParam model string required nama model ex:'Feed','Artikel'
     * @queryParam fields[comment] string select kolom 'user_id','content','commentable_type','commentable_id'
     * @queryParam filter[user_id] string Filter by nama 'user_id','content','commentable_type','commentable_id'
     * @queryParam sort string sort data berdasarkan kolom. tambah tanda (-) untuk DESC.
     * @queryParam page[number] integer optional
     * @queryParam page[size] integer oprional
     * @queryParam include string get data relasi (dataUser). 
     */
    public function viewComment($id,$model)
    {
        $pathModel="App\Models\\$model";
        $find=Comment::where(['commentable_id'=>$id,'commentable_type'=>$pathModel])->orderBy('created_at','desc');
        $comment = QueryBuilder::for($find)
            ->allowedSorts(['user_id','content','commentable_type','commentable_id','created_at'])
            ->allowedFilters(['user_id','content','commentable_type','commentable_id','created_at'])
            ->jsonPaginate()->appends(Request()->input());

        return new CommentCollection($comment);
    }
    /**
     * Create Comment
     * untuk create comment
     * @urlParam model string required jenis model: 'Feed','Artikel'
     * @bodyParam content string required
     * @bodyParam commentable_id integer required
     * @responseFile storage/responses/comment.create.json
     */
    public function createComment(Request $req,$model)
    {
        $auth=Auth::user();
        $pathModel="App\Models\\$model";
        $namaModel=$model;
        switch($model){
            case 'Feed':
                $model=new Feed;
                $idCommentable=$model->find($req->commentable_id);
                $findUser=User::find($idCommentable->user_id);
                $findUser->notify(new CommentNotification($idCommentable->user_id,$idCommentable->judul,$idCommentable->id,$pathModel,$namaModel));
                break;
            case 'Artikel':
                $model=new Artikel;
                $idCommentable=$model->find($req->commentable_id);
                $findUser=User::find($idCommentable->user_id);
                $findUser->notify(new CommentNotification($idCommentable->user_id,$idCommentable->judul,$idCommentable->id,$pathModel,$namaModel));
                break;
            case 'Ebook':
                $model=new Ebook;
                $idCommentable=$model->find($req->commentable_id);
                break;
            default:
                return response()->json(['status'=>'failed','message'=>'Data tidak ditemukan','data'=>[]],403);
        }
        if(!is_null($idCommentable)){
            $comment=Comment::create([
                'user_id'=>$auth->id,
                'content'=>$req->content,
                'commentable_type'=>$pathModel,
                'commentable_id'=>$idCommentable->id
            ]);
            return response()->json([
                'status'=>'success',
                'message'=>'Berhasil membuat komentar',
                'data'=>$comment
            ]);
        }
        return response()->json(['status'=>'failed','message'=>'Data tidak ditemukan','data'=>[]],403);
    }
    /**
     * Update Comment
     * untuk update comment
     * @urlParam id integer required
     * @bodyParam content string optional
     * @responseFile storage/responses/comment.update.json
     */
    public function updateComment(Request $req, $id)
    {
        $auth = Auth::user();
        $comment = $this->findData($id);
        $this->authorize('updateComment',[Comment::class,$comment->user_id]);
        //isi dengan data baru
        $comment->fill($req->input());
        //validasi input
        $validation = $comment->validate();
        //jika data valid
        if(!$validation->fails()){
            $comment->save();
            return response()->json([
                'status' => 'success',
                'message' => 'Komentar berhasil diupdate',
                'data' => new CommentResource($comment)
            ]);
        }

        return response()->json([
            'status' => 'failed',
            'message' => 'data gagal disimpan!',
            'data' => ['errors'=>$validation->errors()]
        ]);
    }
    /**
     * Delete Comment
     * untuk menghapus komentar
     * @urlParam id integer required
     * @responseFile storage/responses/comment.delete.json
     */
    public function deleteComment($id)
    {
        $comment = $this->findData($id);
        $this->authorize('deleteComment',[Comment::class,$comment->user_id]);
        if(!is_null($comment)){
            $comment->delete();
            return response()->json([
                'status' => 'success',
                'message' => 'Data Comment berhasil dihapus',
            ]);
        }

        return response()->json([
            'status' => 'failed',
            'message' => 'Data Comment tidak ditemukan',
        ]);
    }

    //find data
    public function findData($id){
        $model = Comment::find($id);
        if(is_null($model)){
            throw new DataNotFound();
        }
        return $model;
    }
}
