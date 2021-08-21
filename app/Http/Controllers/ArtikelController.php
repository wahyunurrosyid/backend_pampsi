<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use App\Exceptions\DataNotFound;
use App\Http\Resources\ArtikelCollection;
use App\Http\Resources\ArtikelResource;
use App\Http\Resources\KategoriArtikelResource;
use App\Models\KategoriArtikel;
use App\Models\User;
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
class ArtikelController extends Controller
{
    /**
     * View Artikel
     * untuk view artikel yang dishare
     * @group Public API
     * @unauthenticated
     * @urlParam id integer required
     * @queryParam fields[artikel] string select kolom 'nama_kategori','judul','isi','image','user_id','views','visible'
     * @queryParam filter[nama_kategori] string Filter by nama nama_kategori. 
     * @queryParam sort string sort data berdasarkan kolom. tambah tanda (-) untuk DESC.
     * @queryParam page[number] integer optional
     * @queryParam page[size] integer oprional
     * @queryParam include string get data relasi (dataUser). 
     * @responseFile storage/responses/artikel.public.json
     */
    public function generalViewArtikel($id)
    {
        $artikel = QueryBuilder::for(Artikel::where(['id'=>$id,'visible'=>'public']))
            ->allowedSorts(['nama_kategori','judul','isi','image','user_id','views','visible'])
            ->allowedFilters(['nama_kategori','judul','isi','image','user_id','views','visible'])
            ->jsonPaginate()->appends(Request()->input());
        $model = Artikel::where(['id'=>$id,'visible'=>'public'])->first();
        $model->views = $model->views+1;
        $model->save();

        return new ArtikelCollection($artikel);
    }
    /**
     * List Artikel
     * untuk artikel yang dishare
     * @group Public API
     * @unauthenticated
     * @queryParam fields[artikel] string select kolom 'nama_kategori','judul','isi','image','user_id','views','visible'
     * @queryParam filter[nama_kategori] string Filter by nama nama_kategori. 
     * @queryParam sort string sort data berdasarkan kolom. tambah tanda (-) untuk DESC.
     * @queryParam page[number] integer optional
     * @queryParam page[size] integer oprional
     * @queryParam include string get data relasi (dataUser). 
     * @responseFile storage/responses/artikel.public.json
     */
    public function generalListArtikel()
    {
        $artikel = QueryBuilder::for(Artikel::where('visible','public')->orderBy('created_at','desc'))
            ->allowedSorts(['nama_kategori','judul','isi','image','user_id','views','visible'])
            ->allowedFilters(['nama_kategori','judul','isi','image','user_id','views','visible'])
            ->jsonPaginate()->appends(Request()->input());

        return new ArtikelCollection($artikel);
    }
    /**
     * Private Artikel
     * untuk artikel yang diprivate
     * @bodyParam per_page integer required
     * @bodyParam page integer required
     * @responseFile storage/responses/artikel.public.json
     */
    public function privateArtikel(Request $req)
    {
        $auth = Auth::user();
        $query = DB::table('friendships')->leftJoin('artikel',function($join){
            $join->on('artikel.user_id','=','second_user');
            $join->orOn('artikel.user_id', '=', 'first_user');
        })
        ->where(['status'=>'confirmed','first_user'=>$auth->id,'artikel.visible'=>'private'])
        ->select('artikel.id','artikel.nama_kategori','artikel.judul','artikel.isi','artikel.image','artikel.user_id','artikel.views','artikel.visible')
        ->orWhere('second_user',$auth->id)->get();

        return $this->paginate($query, $per_page = $req->per_page, $page = $req->page, $options = []);
    }
    /**
     * Publik Artikel
     * untuk artikel yang dishare
     * @queryParam fields[artikel] string select kolom 'nama_kategori','judul','isi','image','user_id','views','visible'
     * @queryParam filter[nama_kategori] string Filter by nama nama_kategori. 
     * @queryParam sort string sort data berdasarkan kolom. tambah tanda (-) untuk DESC.
     * @queryParam page[number] integer optional
     * @queryParam page[size] integer oprional
     * @queryParam include string get data relasi (dataUser). 
     * @responseFile storage/responses/artikel.public.json
     */
    public function publicArtikel()
    {
        $artikel = QueryBuilder::for(Artikel::where('visible','public')->orderBy('created_at','desc'))
            ->allowedSorts(['nama_kategori','judul','isi','image','user_id','views','visible'])
            ->allowedFilters(['nama_kategori','judul','isi','image','user_id','views','visible'])
            ->jsonPaginate()->appends(Request()->input());

        return new ArtikelCollection($artikel);
    }
    /**
     * View Artikel
     * untuk view artikel
     * @urlParam id integer required
     * @apiResource App\Http\Resources\ArtikelResource
     * @apiResourceModel App\Models\Artikel
     */
    public function viewArtikel($id)
    {
        $model = Artikel::where('id',$id)->get();
        foreach($model as $m){
            $m->views = $m->views+1;
            $m->save();
        }
        return new ArtikelCollection($model);
    }
    /**
     * My Artikel
     * @queryParam fields[artikel] string select kolom 'nama_kategori','judul','isi','image','user_id','views'
     * @queryParam filter[nama] string Filter by 'nama_kategori','judul','isi','image','user_id','views'
     * @queryParam sort string sort data berdasarkan kolom. tambah tanda (-) untuk DESC.
     * @queryParam page[number] integer optional
     * @queryParam page[size] integer optional
     * @queryParam include string get data relasi (dataUser). 
     * @responseFile storage/responses/artikel.myArtikel.json
     */
    public function myArtikel()
    {
        $auth=Auth::user();
        $artikel = QueryBuilder::for(Artikel::where('user_id',$auth->id)->orderBy('created_at','desc'))
            ->allowedSorts(['nama_kategori','judul','isi','image','user_id','views'])
            ->allowedFilters(['nama_kategori','judul','isi','image','user_id','views',AllowedFilter::exact('id')])
            ->jsonPaginate()->appends(Request()->input());
        
        return new ArtikelCollection($artikel);
    }
    /**
     * Create Artikel
     * untuk create artikel
     * @bodyParam nama_kategori string required
     * @bodyParam judul string required
     * @bodyParam isi text required
     * @bodyParam visible enum required ('public','private')
     * @bodyParam objImage file optional
     * @responseFile storage/responses/artikel.create.json
     */
    public function createArtikel(Request $req)
    {
        $auth = Auth::user();

        $model = new Artikel();
        $model->fill($req->input());
        $model->objImage=$req->objImage;

        $validation = $model->validate();

        //move gambar
        $image = $req->objImage;
        if(!is_null($image)){
            $ex = $image->getClientOriginalExtension();
            $imageName = time().".".$ex;
            $model->image=$imageName;
        }

        $model->user_id=$auth->id;
        
        //validasi
        if(!$validation->fails()){
            $model->save();
            if(!is_null($image)){
                $image->move('artikel/upload/'.$auth->id.'', $imageName, 'local');
            }
            activity()->causedBy($auth->id)->log('membuat artikel');
            return response()->json([
                'status' => 'success',
                'message' => 'data berhasil disimpan!',
                'data' => new ArtikelResource($model)
            ]);
        }

        return response()->json([
            'status' => 'failed',
            'message' => 'data gagal disimpan!',
            'data' => ['errors'=>$validation->errors()]
        ]);
    }
    /**
     * Update artikel
     * untuk update artikel
     * @urlParam id integer required
     * @bodyParam nama_kategori string optional
     * @bodyParam judul string optional
     * @bodyParam isi string optional
     * @bodyParam image file optional
     * @bodyParam visible enum required ('public','private')
     * @responseFile storage/responses/artikel.update.json
     */
    public function updateArtikel(Request $req,$id)
    {
        $auth = Auth::user();
        $artikel = $this->findData($id);
        $this->authorize('updateArtikel',[Artikel::class,$artikel->user_id]);
        //isi dengan data baru
        $artikel->fill($req->input());
        if(!is_null($req->objImage)){
            $artikel->objImage=$req->objImage;
        }
        //validasi input
        $validation = $artikel->validate();

        //move gambar
        $image = $req->objImage;
        if(!is_null($image)){
            $ex = $image->getClientOriginalExtension();
            $imageName = time().".".$ex;
            $artikel->image=$imageName;
        }

        //jika data valid
        if(!$validation->fails()){
            $artikel->save();
            if(!is_null($image)){
                $image->move('artikel/upload/'.$auth->id.'', $imageName, 'local');
            }
            activity()->causedBy($auth->id)->log('mengubah artikel');
            return response()->json([
                'status' => 'success',
                'message' => 'Artikel berhasil diupdate',
                'data' => new ArtikelResource($artikel)
            ]);
        }

        return response()->json([
            'status' => 'failed',
            'message' => 'data gagal disimpan!',
            'data' => ['errors'=>$validation->errors()]
        ]);
    }
    /**
     * Delete Artikel
     * untuk delete artikel
     * @urlParam id integer required
     * @responseFile storage/responses/artikel.delete.json
     */
    public function deleteArtikel($id)
    {
        $artikel = $this->findData($id);
        $this->authorize('deleteArtikel',[Artikel::class,$artikel->user_id]);
        if(!is_null($artikel)){
            $artikel->delete();
            activity()->causedBy(Auth::user()->id)->log('menghapus artikel');
            return response()->json([
                'status' => 'success',
                'message' => 'Data Artikel berhasil dihapus',
            ]);
        }

        return response()->json([
            'status' => 'failed',
            'message' => 'Data Artikel tidak ditemukan',
        ]);
    }
    /**
     * List Kategori Artikel
     * untuk list kategori artikel
     * @responseFile storage/responses/artikel.listKategori.json
     */
    public function listKategoriArtikel()
    {
        $model=KategoriArtikel::all();
        return $model;
    }
    /**
     * Create Kategori Artikel
     * untuk create kategori artikel
     * @bodyParam nama string required
     * @responseFile storage/responses/artikelKategori.create.json
     */
    public function createKategoriArtikel(Request $req)
    {
        $model = new KategoriArtikel();
        $model->fill($req->input());
        $validation = $model->validate();
        if(!$validation->fails()){
            $model->save();
            activity()->causedBy(Auth::user()->id)->log('membuat kategori artikel');
            return response()->json([
                'status' => 'success',
                'message' => 'data berhasil disimpan!',
                'data' => new KategoriArtikelResource($model)
            ]);
        }

        return response()->json([
            'status' => 'failed',
            'message' => 'data gagal disimpan!',
            'data' => ['errors'=>$validation->errors()]
        ]);
    }
    /**
     * Update Kategori Artikel
     * untuk update kategori artikel
     * @urlParam nama string required
     * @bodyParam nama string required
     * @responseFile storage/responses/artikelKategori.update.json
     */
    public function updateKategoriArtikel(Request $req,$nama)
    {
        $exNama = explode('%20',$nama);
        $imNama = implode(' ',$exNama);
        $kategoriArtikel = KategoriArtikel::where('nama',$imNama)->update([
            'nama'=>$req->nama
        ]);
        
        if($kategoriArtikel==true){
            activity()->causedBy(Auth::user()->id)->log('mengubah kategori artikel');
            return response()->json([
                'status'=>'success',
                'message'=>'Berhasil update kategori artikel',
                'data'=>$kategoriArtikel
            ]);
        }
        return response()->json([
            'status'=>'failed',
            'message'=>'Gagal update kategori artikel',
            'data'=>$kategoriArtikel
        ]);
    }
    /**
     * Delete Kategori Artikel
     * untuk hapus kategori artikel
     * @urlParam nama string required
     * @responseFile storage/responses/artikelKategori.delete.json
     */
    public function deleteKategoriArtikel($nama)
    {
        $exNama = explode('%20',$nama);
        $imNama = implode(' ',$exNama);
        $kategoriArtikel = KategoriArtikel::where('nama',$imNama)->delete();
        if($kategoriArtikel==true){
            activity()->causedBy(Auth::user()->id)->log('menghapus artikel');
            return response()->json([
                'status'=>'success',
                'message'=>'Berhasil hapus kategori artikel',
                'data'=>$kategoriArtikel
            ]);
        }
        return response()->json([
            'status'=>'failed',
            'message'=>'Gagal hapus kategori artikel',
            'data'=>$kategoriArtikel
        ]);
    }

    /**
     * Like Artikel
     * untuk like artikel
     * @bodyParam id integer required
     * @responseFile storage/responses/forum.like.json
     */
    public function likeArtikel(Request $req)
    {
        $auth = Auth::user();
        $artikel = $this->findData($req->id);
        $user = User::find($auth->id);
        $user->like($artikel);
        activity()->causedBy($auth->id)->performedOn(new Artikel)->log('menyukai artikel');
        return response()->json([
            'status'=>'success',
            'message'=>'Berhasil like artikel',
            'data'=>$user->like($artikel)
        ]);
    }
    /**
     * Unlike Artikel
     * untuk unlike artikel
     * @bodyParam id integer required
     * @responseFile storage/responses/forum.unlike.json
     */
    public function unLikeArtikel(Request $req)
    {
        $auth = Auth::user();
        $artikel = $this->findData($req->id);
        $user = User::find($auth->id);
        $user->unlike($artikel);
        activity()->causedBy($auth->id)->performedOn(new Artikel)->log('unlike artikel');
        return response()->json([
            'status'=>'success',
            'message'=>'Berhasil unlike artikel',
            'data'=>$user->unlike($artikel)
        ]);
    }

    //find data
    public function findData($id){
        $model = Artikel::find($id);
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
