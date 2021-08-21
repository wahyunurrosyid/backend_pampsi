<?php

namespace App\Http\Controllers;

use App\Exceptions\DataNotFound;
use App\Http\Resources\CommentForumCollection;
use App\Http\Resources\CommentForumResource;
use App\Jobs\PushNotificationJob;
use App\Models\CommentForum;
use App\Models\Feed;
use App\Models\Forum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\QueryBuilder\QueryBuilder;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Messaging\CloudMessage;
use Kreait\Firebase\Messaging\Notification as Notif;
use App\Models\TokenFcm;

/**
 * @group Comment Forum
 * @authenticated
 */
class CommentForumController extends Controller
{
    /**
     * View Comment Forum
     * untuk view comment forum
     * @urlParam id integer required id forum
     * @queryParam fields[comment_forum] string select kolom 'user_id','content','forum_id'
     * @queryParam filter[user_id] string Filter by nama 'user_id','content', 'forum_id'
     * @queryParam sort string sort data berdasarkan kolom. tambah tanda (-) untuk DESC.
     * @queryParam page[number] integer optional
     * @queryParam page[size] integer oprional
     * @queryParam include string get data relasi (dataUser). 
     */
    public function viewCommentForum($id)
    {
        $find = CommentForum::where('forum_id',$id);
        $commentForum = QueryBuilder::for($find)
            ->allowedSorts(['user_id', 'content', 'forum_id'])
            ->allowedFilters(['user_id', 'content', 'forum_id'])
            ->jsonPaginate()->appends(Request()->input());

        return new CommentForumCollection($commentForum);
    }
    /**
     * Create Comment Forum
     * untuk create comment forum
     * @urlParam id string required
     * @bodyParam content string required
     * @responseFile storage/responses/comment.create.json
     */
    public function createCommentForum(Request $req, $id)
    {
        $auth = Auth::user();
        activity()->causedBy($auth->id)->log('mengomentari forum');
        $comment = CommentForum::create([
            'user_id' => $auth->id,
            'content' => $req->content,
            'forum_id' => $id,
        ]);
        $forum = Forum::find($id);
        $title = 'Comment Forum Notification';
        $value = 'Your account has a new comment forum';
        dispatch(new PushNotificationJob($forum->user_id,$title,$value));
        return response()->json([
            'status' => 'success',
            'message' => 'Berhasil membuat komentar',
            'data' => $comment
        ]);
    }
    /**
     * Update Comment Forum
     * untuk update comment forum
     * @urlParam id integer required
     * @bodyParam content string optional
     * @responseFile storage/responses/comment.update.json
     */
    public function updateCommentForum(Request $req, $id)
    {
        $auth = Auth::user();
        $commentForum = $this->findData($id);
        $this->authorize('updateCommentForum', [CommentForum::class, $commentForum->user_id]);
        //isi dengan data baru
        $commentForum->fill($req->input());
        //validasi input
        $validation = $commentForum->validate();
        //jika data valid
        if (!$validation->fails()) {
            $commentForum->save();
            activity()->causedBy($auth->id)->log('mengubah komentar forum');
            return response()->json([
                'status' => 'success',
                'message' => 'Komentar berhasil diupdate',
                'data' => new CommentForumResource($commentForum)
            ]);
        }

        return response()->json([
            'status' => 'failed',
            'message' => 'data gagal disimpan!',
            'data' => ['errors' => $validation->errors()]
        ]);
    }
    /**
     * Delete Comment Forum
     * untuk menghapus komentar forum
     * @urlParam id integer required
     * @responseFile storage/responses/comment.delete.json
     */
    public function deleteCommentForum($id)
    {
        $comment = $this->findData($id);
        $this->authorize('deleteCommentForum', [CommentForum::class, $comment->user_id]);
        if (!is_null($comment)) {
            $comment->delete();
            activity()->causedBy(Auth::user()->id)->log('menghapus forum');
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
    public function findData($id)
    {
        $model = CommentForum::find($id);
        if (is_null($model)) {
            throw new DataNotFound();
        }
        return $model;
    }
}
