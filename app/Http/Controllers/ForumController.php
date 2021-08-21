<?php

namespace App\Http\Controllers;

use App\Exceptions\DataNotFound;
use App\Http\Resources\ForumCollection;
use App\Http\Resources\ForumResource;
use App\Http\Resources\KategoriForumResource;
use App\Models\Forum;
use App\Models\KategoriForum;
use App\Models\User;
use App\Notifications\LikeNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\QueryBuilder\QueryBuilder;

/**
 * @group Forum
 * @authenticated
 */
class ForumController extends Controller
{
    /**
     * List Forum
     * untuk list forum
     * @queryParam sort string sort data berdasarkan kolom. tambah tanda (-) untuk DESC.
     * @queryParam page[number] integer optional
     * @queryParam page[size] integer oprional
     * @queryParam include string get data relasi (dataComment,dataUser,likers). 
     * @apiResource App\Http\Resources\ForumCollection
     * @apiResourceModel App\Models\Forum
     */
    public function listForum()
    {
        $forum = QueryBuilder::for(Forum::class)
            ->allowedIncludes(['dataComment','dataUser','likers'])
            ->allowedSorts(['nama_kategori','judul','isi','image','user_id','views','status','created_at','id'])
            ->allowedFilters(['nama_kategori','judul','isi','image','user_id','views','status'])
            ->jsonPaginate()->appends(Request()->input());

        return new ForumCollection($forum);
    }
    /**
     * View Forum
     * untuk view forum
     * @urlParam id integer required
     * @apiResource App\Http\Resources\ForumCollection
     * @apiResourceModel App\Models\Forum
     */
    public function viewForum($id)
    {
        $where = Forum::find($id);
        $user = User::find(Auth::user()->id);
        $where->views = $where->views+1;
        $where->save();
        return response()->json([
            'status'=>'success',
            'data'=>[
                'isLike'=>$user->hasLiked($where),
                'likers'=>$where->likers->count(),
                'forum'=>$where,
                'dataComment'=>$where->dataComment,
                'dataUser'=>$where->dataUser,
                'dataModerator'=>$where->dataModerator
            ]
        ]);
    }
    /**
     * Create Forum
     * untuk create forum
     * @bodyParam nama_kategori string required
     * @bodyParam judul string required
     * @bodyParam isi text required
     * @bodyParam objImage file optional
     * @responseFile storage/responses/forum.create.json
     */
    public function createForum(Request $req)
    {
        $auth = Auth::user();
        $model = new Forum();
        $model->fill($req->input());
        $model->objImage=$req->objImage;

        $validation = $model->validate();

        $image = $req->objImage;
        if(!is_null($image)){
            $ex = $image->getClientOriginalExtension();
            $imageName = time().".".$ex;
            $model->image=$imageName;
        }

        //convert base64
        $isi = $req->input('isi');
        if(!is_null($isi)){
            $dom = new \DomDocument();
            libxml_use_internal_errors(true);
            $dom->loadHTML($isi, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            $tagImg = $dom->getElementsByTagName('img');
            foreach($tagImg as $t => $img){
                $data = $img->getAttribute('src');
                if(strpos($data,"base64") == true){
                    list($type, $data) = explode(';', $data);
                    list(, $data)      = explode(',', $data);
                    $data = base64_decode($data);
    
                    $image_name = url('forum/isi/note').time().'.png';
                    // $img->move('forum/isi/'.$auth->id.'', $image_name, 'local');
                    file_put_contents(base_path('public/forum/isi/note').time().'.png', $data);
                    $img->removeAttribute('src');
                    $img->setAttribute('src', $image_name);
                }
            }
    
            $isi = $dom->saveHTML();
            $model->isi = $isi;
        }

        $model->user_id=$auth->id;
        if(!$validation->fails()){
            $model->save();
            if(!is_null($image)){
                $image->move('forum/upload/'.$auth->id.'', $imageName, 'local');
            }
            activity()->causedBy($auth->id)->performedOn(new Forum)->log('membuat forum');
            return response()->json([
                'status' => 'success',
                'message' => 'data berhasil disimpan!',
                'data' => new ForumResource($model)
            ]);
        }

        return response()->json([
            'status' => 'failed',
            'message' => 'data gagal disimpan!',
            'data' => ['errors'=>$validation->errors()]
        ]);
    }
    /**
     * Update Forum
     * untuk update forum
     * @urlParam id integer required
     * @bodyParam nama_kategori string optional
     * @bodyParam judul string optional
     * @bodyParam isi string optional
     * @bodyParam image file optional
     * @responseFile storage/responses/forum.update.json
     */
    public function updateForum(Request $req,$id)
    {
        $auth = Auth::user();
        $forum = $this->findData($id);
        $this->authorize('updateForum',[Forum::class,$forum->user_id]);
        //isi dengan data baru
        $forum->fill($req->input());
        if(!is_null($req->objImage)){
            $forum->objImage=$req->objImage;
        }
        //validasi input
        $validation = $forum->validate();

        //move gambar
        $image = $req->objImage;
        if(!is_null($image)){
            $ex = $image->getClientOriginalExtension();
            $imageName = time().".".$ex;
            $forum->image=$imageName;
        }

        //convert base64
        $isi = $req->input('isi');
        $dom = new \DomDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML($isi, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $tagImg = $dom->getElementsByTagName('img');
        foreach($tagImg as $t => $img){
            $data = $img->getAttribute('src');
            if(strpos($data,"base64") == true){
                list($type, $data) = explode(';', $data);
                list(, $data)      = explode(',', $data);
                $data = base64_decode($data);

                $image_name = time().'.png';
                $img->move('forum/isi/'.$auth->id.'', $image_name, 'local');
                $img->removeAttribute('src');
                $img->setAttribute('src', $image_name);
            }
        }

        //jika data valid
        if(!$validation->fails()){
            $forum->save();
            if(!is_null($image)){
                $image->move('forum/upload/'.$auth->id.'', $imageName, 'local');
            }
            activity()->causedBy($auth->id)->performedOn(new Forum)->log('mengubah forum');
            return response()->json([
                'status' => 'success',
                'message' => 'Forum berhasil diupdate',
                'data' => new ForumResource($forum)
            ]);
        }

        return response()->json([
            'status' => 'failed',
            'message' => 'data gagal disimpan!',
            'data' => ['errors'=>$validation->errors()]
        ]);
    }
    /**
     * Delete Forum
     * untuk delete forum
     * @urlParam id integer required
     * @responseFile storage/responses/forum.delete.json
     */
    public function deleteForum($id)
    {
        $forum = $this->findData($id);
        $this->authorize('deleteForum',[Forum::class,$forum->user_id]);
        if(!is_null($forum)){
            $forum->delete();
            activity()->causedBy(Auth::user()->id)->performedOn(new Forum)->log('menghapus forum');
            return response()->json([
                'status' => 'success',
                'message' => 'Data Forum berhasil dihapus',
            ]);
        }

        return response()->json([
            'status' => 'failed',
            'message' => 'Data Forum tidak ditemukan',
        ]);
    }
    /**
     * List Kategori Forum
     * untuk list kategori forum
     * @responseFile storage/responses/forum.listKategori.json
     */
    public function listKategoriForum()
    {
        $model=KategoriForum::all();
        return $model;
    }
    /**
     * Create Kategori Forum
     * untuk create kategori forum
     * @bodyParam nama string required
     * @responseFile storage/responses/artikelForum.create.json
     */
    public function createKategoriForum(Request $req)
    {
        $model = new KategoriForum();
        $model->fill($req->input());
        $validation = $model->validate();
        if(!$validation->fails()){
            $model->save();
            activity()->causedBy(Auth::user()->id)->performedOn(new Forum)->log('membuat kategori forum');
            return response()->json([
                'status' => 'success',
                'message' => 'data berhasil disimpan!',
                'data' => new KategoriForumResource($model)
            ]);
        }

        return response()->json([
            'status' => 'failed',
            'message' => 'data gagal disimpan!',
            'data' => ['errors'=>$validation->errors()]
        ]);
    }
    /**
     * Update Kategori Forum
     * untuk update kategori forum
     * @urlParam nama string required
     * @bodyParam nama string required
     * @responseFile storage/responses/artikelForum.update.json
     */
    public function updateKategoriForum(Request $req,$nama)
    {
        $exNama = explode('%20',$nama);
        $imNama = implode(' ',$exNama);
        $kategoriForum = KategoriForum::where('nama',$imNama)->update([
            'nama'=>$req->nama
        ]);
        
        if($kategoriForum==true){
            activity()->causedBy(Auth::user()->id)->performedOn(new Forum)->log('mengubah kategori forum');
            return response()->json([
                'status'=>'success',
                'message'=>'Berhasil update kategori forum',
                'data'=>$kategoriForum
            ]);
        }
        return response()->json([
            'status'=>'failed',
            'message'=>'Gagal update kategori forum',
            'data'=>$kategoriForum
        ]);
    }
    /**
     * Delete Kategori Forum
     * untuk hapus kategori forum
     * @urlParam nama string required
     * @responseFile storage/responses/artikelForum.delete.json
     */
    public function deleteKategoriForum($nama)
    {
        $exNama = explode('%20',$nama);
        $imNama = implode(' ',$exNama);
        $kategoriForum = KategoriForum::where('nama',$imNama)->delete();
        if($kategoriForum==true){
            activity()->causedBy(Auth::user()->id)->performedOn(new Forum)->log('menghapus kategori forum');
            return response()->json([
                'status'=>'success',
                'message'=>'Berhasil hapus kategori forum',
                'data'=>$kategoriForum
            ]);
        }
        return response()->json([
            'status'=>'failed',
            'message'=>'Gagal hapus kategori forum',
            'data'=>$kategoriForum
        ]);
    }
    /**
     * Like Forum
     * untuk like forum
     * @urlParam id integer required
     * @responseFile storage/responses/forum.like.json
     */
    public function likeForum($id)
    {
        $auth = Auth::user();
        $forum = $this->findData($id);
        $user = User::find($auth->id);
        $user->like($forum);
        activity()->causedBy($auth->id)->performedOn(new Forum)->log('menyukai forum');
        $userNotif = User::find($forum->user_id);
        $userNotif->notify(new LikeNotification($forum,$auth,'Forum'));
        return response()->json([
            'status'=>'success',
            'message'=>'Berhasil like forum',
            'data'=>$user->like($forum)
        ]);
    }
    /**
     * Unlike Forum
     * untuk unlike forum
     * @urlParam id integer required
     * @responseFile storage/responses/forum.unlike.json
     */
    public function unLikeForum($id)
    {
        $auth = Auth::user();
        $forum = $this->findData($id);
        $user = User::find($auth->id);
        $user->unlike($forum);
        activity()->causedBy($auth->id)->performedOn(new Forum)->log('unlike forum');
        return response()->json([
            'status'=>'success',
            'message'=>'Berhasil unlike forum',
            'data'=>$user->unlike($forum)
        ]);
    }

    /**
     * Status Forum
     * untuk update status forum open/closed
     * @urlParam id
     * @bodyParam alasan string required
     */
    public function updateStatusForum(Request $req,$id)
    {
        $model = $this->findData($id);
        $this->authorize('updateStatusForum',[Forum::class,$model->nama_kategori]);
        $status = ($model->status == 'open')?true:false;
        if($status){
            if(Request()->has('alasan')){
                $model->status = 'closed';
                $model->alasan = $req->alasan;
                $model->save();
                return response()->json([
                    'status'=>'success',
                    'message'=>'Berhasil mengubah status forum',
                    'data'=>[
                        'status'=>$model->status,
                        'alasan'=>$model->alasan
                    ]
                ]);
            }
            return response()->json([
                'status'=>'failed',
                'message'=>'Mohon untuk mengisi alasan untuk mengubah status forum',
                'data'=>null
            ]);
        }
        $model->status = 'open';
        $model->alasan = null;
        $model->save();
        return response()->json([
            'status'=>'success',
            'message'=>'Berhasil mengubah status forum',
            'data'=>[
                'status'=>$model->status,
                'alasan'=>null
            ]
        ]);
    }

    public function findData($id){
        $model = Forum::find($id);
        if(is_null($model)){
            throw new DataNotFound();
        }
        return $model;
    }
}
