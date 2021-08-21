<?php

namespace App\Http\Controllers;

use App\Exceptions\DataNotFound;
use App\Http\Resources\PengalamanCollection;
use App\Http\Resources\PengalamanResource;
use App\Models\Pengalaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

/**
 * @group Pengalaman
 * @authenticated
 */
class PengalamanController extends Controller
{
    /**
     * MyPengalaman
     * @queryParam fields[pengalaman] string select kolom 'user_id','portfolio','project_kategori','service_kategori','klien','klien_kategori','lokasi',
     * 'member','role','start_date','end_date','deskripsi'
     * @queryParam filter[user_id] string Filter by 'user_id','portfolio','project_kategori','service_kategori','klien','klien_kategori','lokasi',
     * 'member','role','start_date','end_date','deskripsi'
     * @queryParam sort string sort data berdasarkan kolom. tambah tanda (-) untuk DESC.
     * @queryParam page[number] integer optional
     * @queryParam page[size] integer optional
     * @responseFile storage/responses/pengalaman.myPengalaman.json
     */
    public function myPengalaman()
    {
        $auth=Auth::user();
        $pengalaman = QueryBuilder::for(Pengalaman::where('user_id',$auth->id))
            ->allowedSorts(['nama_kategori','judul','isi','image','user_id','views'])
            ->allowedFilters(['nama_kategori','judul','isi','image','user_id','views',AllowedFilter::exact('id')])
            ->jsonPaginate()->appends(Request()->input());
        
        return new PengalamanCollection($pengalaman);
    }
    /**
     * Create Pengalaman
     * untuk create pengalaman
     * @bodyParam portfolio enum required 'Project Based', 'Individual Based'
     * @bodyParam project_kategori string optional
     * @bodyParam service_kategori string optional
     * @bodyParam klien string optional
     * @bodyParam klien_kategori string required 'child','teenager','adult','the elderly'
     * @bodyParam lokasi string optional
     * @bodyParam member integer optional
     * @bodyParam role string optional
     * @bodyParam start_date date optional
     * @bodyParam end_date date optional
     * @bodyParam deskripsi text optional
     * @responseFile storage/responses/pengalaman.create.json
     */
    public function createPengalaman(Request $req)
    {
        $auth = Auth::user();

        $model = new Pengalaman();
        $model->fill($req->input());
        $model->user_id = $auth->id;

        $validation = $model->validate();

        if (!$validation->fails()) {
            $model->save();
            return response()->json([
                'status' => 'success',
                'message' => 'data berhasil disimpan!',
                'data' => new PengalamanResource($model)
            ]);
        }

        return response()->json([
            'status' => 'failed',
            'message' => 'data gagal disimpan!',
            'data' => ['errors' => $validation->errors()]
        ]);
    }
    /**
     * Update Pengalaman
     * untuk update pengalaman
     * @urlParam id integer required
     * @bodyParam portfolio enum optional 'Project Based', 'Individual Based'
     * @bodyParam project_kategori string optional
     * @bodyParam service_kategori string optional
     * @bodyParam klien string optional
     * @bodyParam klien_kategori string optional 'child','teenager','adult','the elderly'
     * @bodyParam lokasi string optional
     * @bodyParam member integer optional
     * @bodyParam role string optional
     * @bodyParam start_date date optional
     * @bodyParam end_date date optional
     * @bodyParam deskripsi text optional
     * @responseFile storage/responses/pengalaman.update.json
     */
    public function updatePengalaman(Request $req,$id)
    {
        $pengalaman = $this->findData($id);
        $this->authorize('updatePengalaman',[Pengalaman::class,$pengalaman->user_id]);
        $pengalaman->fill($req->input());
        $validation = $pengalaman->validate();
        if(!$validation->fails()){
            return response()->json([
                'status' => 'success',
                'message' => 'Artikel berhasil diupdate',
                'data' => new PengalamanResource($pengalaman)
            ]);
        }
        return response()->json([
            'status' => 'failed',
            'message' => 'data gagal disimpan!',
            'data' => ['errors'=>$validation->errors()]
        ]);
    }
    /**
     * Delete Pengalaman
     * untuk hapus pengalaman
     * @urlParam id integer required
     * @responseFile storage/responses/pengalaman.delete.json
     */
    public function deletePengalaman($id)
    {
        $pengalaman = $this->findData($id);
        $this->authorize('deletePengalaman',[Pengalaman::class,$pengalaman->user_id]);
        if(!is_null($pengalaman)){
            $pengalaman->delete();
            return response()->json([
                'status' => 'success',
                'message' => 'Data Pengalaman berhasil dihapus',
            ]);
        }
        return response()->json([
            'status' => 'failed',
            'message' => 'Data Pengalaman tidak ditemukan',
        ]);
    }
    
    public function findData($id){
        $model = Pengalaman::find($id);
        if(is_null($model)){
            throw new DataNotFound();
        }
        return $model;
    }
}
