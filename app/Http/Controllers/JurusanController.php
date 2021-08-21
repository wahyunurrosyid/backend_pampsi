<?php

namespace App\Http\Controllers;

use App\Exceptions\DataNotFound;
use App\Http\Resources\JurusanCollection;
use App\Http\Resources\JurusanResource;
use App\Models\Jurusan;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

/**
 * @group Jurusan
 * @authenticated
 */
class JurusanController extends Controller
{
    /**
     * @group Public API
     * List Jurusan
     * data jurusan
     * @unauthenticated
     * @queryParam fields[jurusan] string select kolom 'kode','universitas_id','nama'
     * @queryParam filter[universitas_id] integer Filter by universitas ID.
     * @queryParam filter[nama] string Filter by nama jurusan. 
     * @queryParam filter[kode] string Filter by kode jurusan. 
     * @queryParam sort string sort data berdasarkan kolom. tambah tanda (-) untuk DESC.
     * @queryParam include string get data relasi (dataUniversitas). 
     * @queryParam page[number] integer optional
     * @queryParam page[size] integer oprional
     * @responseFile storage/responses/jurusan.json
     * 
     */
    public function generalListJurusan()
    {
        $jurusan = QueryBuilder::for(Jurusan::class)
            ->allowedSorts(['nama','kode'])
            ->allowedFilters([
                'nama',
                'kode',
                AllowedFilter::exact('id'),
                AllowedFilter::exact('universitas_id')
            ])->get();
        return new JurusanCollection($jurusan);
    }
    
    /**
     * DataProvider Jurusan
     * daftar collection jurusan dengan paging
     * @queryParam fields[jurusan] string select kolom 'kode','universitas_id','nama'
     * @queryParam filter[universitas_id] integer Filter by universitas ID.
     * @queryParam filter[nama] string Filter by nama jurusan. 
     * @queryParam filter[kode] string Filter by kode jurusan. 
     * @queryParam sort string sort data berdasarkan kolom. tambah tanda (-) untuk DESC.
     * @queryParam include string get data relasi (dataUniversitas). 
     * @queryParam page[number] integer nomor halaman.
     * @queryParam page[size] integer jumlah item per halaman. 
     * @responseFile storage/responses/jurusan.list.json
     */
    public function listAll()
    {
        $jurusan = QueryBuilder::for(Jurusan::class)
            ->allowedSorts(['nama','kode'])
            ->allowedFilters([
                'nama',
                'kode',
                AllowedFilter::exact('id'),
                AllowedFilter::exact('universitas_id')
            ])->jsonPaginate()->appends(Request()->input());
        return new JurusanCollection($jurusan);
    }
    /**
     * DataProvider Jurusan Universitas
     * daftar collection jurusan di satu universitas dengan paging
     * @urlParam id integer required id universitas
     * @responseFile storage/responses/jurusan.list.json
     */
    public function listJurusanUniversitas(Request $req,$id)
    {
        return new JurusanCollection(Jurusan::where('universitas_id',$req->id)->paginate());
    }

    /**
     * View Jurusan
     * @urlParam id integer required ID jurusan
     * @apiResource App\Http\Resources\JurusanResource
     * @apiResourceModel App\Models\Jurusan
     */
    public function view($id)
    {
        $model = Jurusan::find($id);
        return new JurusanResource($model);
    }
    /**
     * Create jurusan
     * untuk create jurusan
     * @bodyParam kode string required kode jurusan
     * @bodyParam universitas_id integer required
     * @bodyParam nama string required
     * @responseFile storage/responses/jurusan.create.json
     * 
     */
    public function createJurusan(Request $req)
    {
        $model = new Jurusan();
        //isi data dari input
        $model->fill($req->input());
        //validasi
        $validation = $model->validate();
        //jika lolos validasi, save data
        if(!$validation->fails()){
            $model->save();
            return response()->json([
                'status' => 'success',
                'message' => 'data berhasil disimpan!',
                'data' => new JurusanResource($model)
            ]);
        }

        //jika gagal validasi, infokan errornya
        return response()->json([
            'status' => 'failed',
            'message' => 'data gagal disimpan!',
            'data' => ['errors'=>$validation->errors()]
        ]);
    }
    /**
     * Update jurusan
     * untuk update jurusan
     * @urlParam id integer required
     * @bodyParam kode string required
     * @bodyParam universitas_id integer required
     * @bodyParam nama string required
     * @responseFile storage/responses/jurusan.create.json
     */
    public function updateJurusan(Request $req, $id)
    {
        $jurusan = $this->findData($id);
        //isi dengan data baru
        $jurusan->fill($req->input());
        //validasi
        $validasi = $jurusan->validate();
        //jika lolos validasi, save data
        if(!$validasi->fails()){
            $jurusan->save();
            return response()->json([
                'status' => 'success',
                'message' => 'Jurusan berhasil diupdate',
                'data' => new JurusanResource($jurusan)
            ]);
        }
        //jika gagal validasi, infokan errornya
        return response()->json([
            'status' => 'failed',
            'message' => 'data gagal disimpan!',
            'data' => ['errors'=>$validasi->errors()]
        ]);
    }
    /**
     * Delete Jurusan
     * untuk delete jurusan
     * @urlParam id integer required id jurusan
     * @response{
     * "status":"success",
     * "message":"jurusan berhasil dihapus",
     * }
     */
    public function deleteJurusan(Request $req,$id)
    {
        $jurusan = $this->findData($id);
        //cek apakah data sudah dipergunakan
        //jika belum digunakan, hapus data
        if(count($jurusan->dataUser)==0){
            $jurusan->delete();
            return response()->json([
                'status' => 'success',
                'message' => 'Jurusan berhasil dihapus'
            ]);
        }

        //jika data sudah digunakan
        return response()->json([
            'status' => 'failed',
            'message' => 'Jurusan sudah digunakan, tidak bisa dihapus',
        ]);
    }

    //find data
    public function findData($id){
        $model = Jurusan::find($id);
        if(is_null($model)){
            throw new DataNotFound();
        }
        return $model;
    }
}
