<?php

namespace App\Http\Controllers;

use App\Exceptions\DataNotFound;
use App\Http\Resources\EbookCollection;
use App\Http\Resources\EbookResource;
use App\Models\Ebook;
use App\Models\User;
use App\Spatie\EbookFilter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Database\Eloquent\Collection;

/**
 * @group Library
 * @authenticated
 */
class EbookController extends Controller
{
    /**
     * View Ebook
     * untuk view ebook yang dishare
     * @group Public API
     * @unauthenticated
     * @urlParam id integer required
     * @queryParam fields[ebook] string select kolom 'judul','author','synopsis','visible','bidang_id','file','image'
     * @queryParam filter[judul] string Filter by 'judul','author','synopsis','visible','bidang_id','file','image'
     * @queryParam sort string sort data berdasarkan kolom. tambah tanda (-) untuk DESC.
     * @queryParam page[number] integer optional
     * @queryParam page[size] integer oprional
     * @responseFile storage/responses/artikel.public.json
     */
    public function generalViewEbook($id)
    {
        $artikel = QueryBuilder::for(Ebook::where(['ebook.id'=>$id,'visible'=>'public']))
            ->join('bidang','bidang.id','ebook.bidang_id')
            ->join('users','users.id','ebook.user_id')
            ->select('ebook.id','user_id','judul','author','synopsis','visible','ebook.bidang_id','ebook.file','ebook.image','bidang.nama','ebook.created_at','users.nama_lengkap', 'users.email','users.photo_profile')
            ->allowedSorts(['judul','author','synopsis','visible','bidang_id','file','image'])
            ->allowedFilters(['judul','author','synopsis','visible','bidang_id','file','image','nama','nama_lengkap','email','photo_profile'])
            ->jsonPaginate()->appends(Request()->input());

        return new EbookCollection($artikel);
    }
    /**
     * Private Ebook
     * untuk artikel yang diprivate
     * @bodyParam per_page integer required
     * @bodyParam page integer required
     * @responseFile storage/responses/artikel.public.json
     */
    public function privateEbook(Request $req)
    {
        $auth = Auth::user();
        $query = DB::table('friendships')->leftJoin('ebook',function($join){
                    $join->on('ebook.user_id','=','second_user');
                    $join->orOn('ebook.user_id','=','second_user');
                })
                ->join('bidang','bidang.id','ebook.bidang_id')
                ->where(['status'=>'confirmed','first_user'=>$auth->id,'ebook.visible'=>'private'])
                ->select('ebook.id','ebook.bidang_id','ebook.judul','ebook.author','ebook.synopsis','ebook.visible','ebook.file','ebook.image','bidang.nama')
                ->orWhere('second_user',$auth->id)->get();

        return $this->paginate($query, $per_page = $req->per_page, $page = $req->page, $options = []);
    }
    /**
     * Public Ebook
     * untuk ebook yang dishare
     * @queryParam fields[artikel] string select kolom 'bidang_id','judul','isi','image','user_id','views','visible'
     * @queryParam filter[nama_kategori] string Filter by nama nama_kategori. 
     * @queryParam sort string sort data berdasarkan kolom. tambah tanda (-) untuk DESC.
     * @queryParam page[number] integer optional
     * @queryParam page[size] integer oprional
     * @responseFile storage/responses/artikel.public.json
     */
    public function publicEbook()
    {
        $ebook = QueryBuilder::for(Ebook::where('visible','public')->orderBy('created_at','desc'))
        ->join('bidang','bidang.id','ebook.bidang_id')
        ->join('users','users.id','ebook.user_id')
        ->select('ebook.id','user_id','judul','author','synopsis','visible','ebook.bidang_id','ebook.file','ebook.image','bidang.nama','ebook.created_at','users.nama_lengkap', 'users.email','users.photo_profile')
            ->allowedSorts(['judul','author','synopsis','visible','bidang_id','file','image'])
            ->allowedFilters(AllowedFilter::custom('ebook', new EbookFilter),'id')
            ->jsonPaginate()->appends(Request()->input());

        return new EbookCollection($ebook);
    }
    /**
     * List Ebook
     * untuk ebook yang dishare
     * @group Public API
     * @unauthenticated
     * @queryParam fields[ebook] string select kolom 'judul','author','synopsis','visible','bidang_id','file','image'
     * @queryParam filter[judul] string Filter by judul. 
     * @queryParam sort string sort data berdasarkan kolom. tambah tanda (-) untuk DESC.
     * @queryParam page[number] integer optional
     * @queryParam page[size] integer oprional
     * @responseFile storage/responses/artikel.public.json
     */
    public function generalListEbook()
    {
        $artikel = QueryBuilder::for(Ebook::where('visible','public')->orderBy('created_at','desc'))
        ->join('bidang','bidang.id','ebook.bidang_id')
        ->join('users','users.id','ebook.user_id')
        ->select('ebook.id','user_id','judul','author','synopsis','visible','ebook.bidang_id','ebook.file','ebook.image','bidang.nama','ebook.created_at','users.nama_lengkap', 'users.email','users.photo_profile')
            ->allowedSorts(['judul','author','synopsis','visible','bidang_id','file','image'])
            ->allowedFilters(AllowedFilter::custom('ebook', new EbookFilter),'id')
            ->jsonPaginate()->appends(Request()->input());

        return new EbookCollection($artikel);
    }
    /**
     * My Ebook
     * @queryParam fields[ebook] string select kolom 'judul','author','synopsis','visible','bidang_id','file','image'
     * @queryParam filter[judul] string Filter by 'judul'
     * @queryParam sort string sort data berdasarkan kolom. tambah tanda (-) untuk DESC.
     * @queryParam page[number] integer optional
     * @queryParam page[size] integer optional
     * @responseFile storage/responses/library.ebook.json
     */
    public function myEbook()
    {
        $auth=Auth::user();
        $ebook = QueryBuilder::for(Ebook::where('user_id',$auth->id)->orderBy('created_at','desc'))
        ->join('bidang','bidang.id','ebook.bidang_id')
        ->join('users','users.id','ebook.user_id')
        ->select('ebook.id','user_id','judul','author','synopsis','visible','ebook.bidang_id','ebook.file','ebook.image','bidang.nama','ebook.created_at','users.nama_lengkap', 'users.email','users.photo_profile')
            ->allowedSorts(['judul','author','synopsis','visible','bidang_id','file','image','created_at'])
            ->allowedFilters(AllowedFilter::custom('ebook', new EbookFilter),'id')
            ->jsonPaginate()->appends(Request()->input());
        return new EbookCollection($ebook);
    }
    /**
     * View Ebook
     * untuk view ebook
     * @urlParam id integer required
     * @apiResource App\Http\Resources\EbookResource
     * @apiResourceModel App\Models\Ebook
     */
    public function viewEbook($id)
    {
        $model = Ebook::where('id',$id)->get();
        return new EbookCollection($model);
    }
    /**
     * Create Ebook
     * untuk create ebook
     * @bodyParam judul string required
     * @bodyParam author string required
     * @bodyParam synopsis text optional
     * @bodyParam visible string required
     * @bodyParam bidang_id integer required
     * @bodyParam file file optional
     * @bodyParam image file optional
     * @responseFile storage/responses/library.ebook.create.json
     */
    public function createEbook(Request $req)
    {
        $auth = Auth::user();

        $model = new Ebook();
        $model->fill($req->input());
        $model->objFile=$req->objFile;
        $model->objImage=$req->objImage;

        $validation = $model->validate();

        //move gambar
        $image = $req->objImage;
        if(!is_null($image)){
            $ex = $image->getClientOriginalExtension();
            $imageName = time().".".$ex;
            $model->image=$imageName;
        }

        //move file
        $file = $req->objFile;
        if(!is_null($file)){
            $exFile = $file->getClientOriginalExtension();
            $fileName = time().".".$exFile;
            $model->file=$fileName;
        }

        $model->user_id=$auth->id;
        
        //validasi
        if(!$validation->fails()){
            $model->save();

            if(!is_null($image)){
                $image->move('ebook/upload/'.$auth->id.'/image//', $imageName, 'local');
            }
            if(!is_null($file)){
                $file->move('ebook/upload/'.$auth->id.'/file//',$fileName, 'local');
            }

            activity()->causedBy($auth->id)->log('membuat ebook');

            return response()->json([
                'status' => 'success',
                'message' => 'data berhasil disimpan!',
                'data' => new EbookResource($model)
            ]);
        }

        return response()->json([
            'status' => 'failed',
            'message' => 'data gagal disimpan!',
            'data' => ['errors'=>$validation->errors()]
        ]);
    }
    /**
     * Update Ebook
     * untuk update ebook
     * @urlParam id integer required
     * @bodyParam judul string optional
     * @bodyParam author string optional
     * @bodyParam synopsis text optional
     * @bodyParam visible string optional
     * @bodyParam bidang_id integer optional
     * @bodyParam file file optional
     * @bodyParam image file optional
     * @responseFile storage/responses/library.ebook.update.json
     */
    public function updateEbook(Request $req,$id)
    {
        $auth = Auth::user();
        $ebook = $this->findData($id);
        $this->authorize('updateEbook',[Ebook::class,$ebook->user_id]);
        //isi dengan data baru
        $ebook->fill($req->input());

        if(!is_null($req->objImage)){
            $ebook->objImage=$req->objImage;
        }

        if(!is_null($req->objFile)){
            $ebook->objFile=$req->objFile;
        }

        //validasi input
        $validation = $ebook->validate();

        //move gambar
        $image = $req->objImage;
        if(!is_null($image)){
            $ex = $image->getClientOriginalExtension();
            $imageName = time().".".$ex;
            $ebook->image=$imageName;
        }

        //move file
        $file = $req->objFile;
        if(!is_null($file)){
            $exFile = $file->getClientOriginalExtension();
            $fileName = time().".".$exFile;
            $ebook->file=$fileName;
        }

        //jika data valid
        if(!$validation->fails()){
            $ebook->save();

            if(!is_null($image)){
                $image->move('ebook/upload/'.$auth->id.'/image//', $imageName, 'local');
            }
            if(!is_null($file)){
                $file->move('ebook/upload/'.$auth->id.'/file//',$fileName, 'local');
            }

            activity()->causedBy($auth->id)->log('mengubah ebook');

            return response()->json([
                'status' => 'success',
                'message' => 'Ebook berhasil diupdate',
                'data' => new EbookResource($ebook)
            ]);
        }

        return response()->json([
            'status' => 'failed',
            'message' => 'data gagal disimpan!',
            'data' => ['errors'=>$validation->errors()]
        ]);
    }
    /**
     * Delete Ebook
     * untuk delete ebook
     * @urlParam id integer required
     * @responseFile storage/responses/library.ebook.delete.json
     */
    public function deleteEbook($id)
    {
        $ebook = $this->findData($id);
        $this->authorize('deleteEbook',[Ebook::class,$ebook->user_id]);
        if(!is_null($ebook)){
            $ebook->delete();
            activity()->causedBy(Auth::user()->id)->log('menghapus ebook');
            return response()->json([
                'status' => 'success',
                'message' => 'Data Ebook berhasil dihapus',
            ]);
        }

        return response()->json([
            'status' => 'failed',
            'message' => 'Data Ebook tidak ditemukan',
        ]);
    }

    /**
     * Like Ebook
     * untuk like ebook
     * @bodyParam id integer required
     * @responseFile storage/responses/forum.like.json
     */
    public function likeEbook(Request $req)
    {
        $auth = Auth::user();
        $ebook = $this->findData($req->id);
        $user = User::find($auth->id);
        $user->like($ebook);
        activity()->causedBy($auth->id)->performedOn(new Ebook)->log('menyukai ebook');
        return response()->json([
            'status'=>'success',
            'message'=>'Berhasil like ebook',
            'data'=>$user->like($ebook)
        ]);
    }
    /**
     * Unlike Ebook
     * untuk unlike ebook
     * @bodyParam id integer required
     * @responseFile storage/responses/forum.unlike.json
     */
    public function unLikeEbook(Request $req)
    {
        $auth = Auth::user();
        $ebook = $this->findData($req->id);
        $user = User::find($auth->id);
        $user->unlike($ebook);
        activity()->causedBy($auth->id)->performedOn(new Ebook)->log('unlike ebook');
        return response()->json([
            'status'=>'success',
            'message'=>'Berhasil unlike forum',
            'data'=>$user->unlike($ebook)
        ]);
    }

    //find data
    public function findData($id){
        $model = Ebook::find($id);
        if(is_null($model)){
            throw new DataNotFound();
        }
        return $model;
    }

    public function paginate($items, $per_page = 15, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);

        $items = $items instanceof Collection ? $items : Collection::make($items);

        return new LengthAwarePaginator(array_values($items->forPage($page, $per_page)->toArray()), $items->count(), $per_page, $page, $options);
    }
}
