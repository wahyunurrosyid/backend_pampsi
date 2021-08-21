<?php

namespace App\Http\Controllers;

use App\Exceptions\DataNotFound;
use App\Http\Resources\ProvinsiCollection;
use App\Http\Resources\ProvinsiResource;
use App\Models\Kota;
use App\Models\Provinsi;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedFilter;

/**
 * @group Provinsi
 * @authenticated
 */
class ProvinsiController extends Controller
{
    /**
     * @group Public API
     * List Provinsi
     * data provinsi
     * @unauthenticated
     * @queryParam fields[provinsi] string select kolom 'negara_id','nama_provinsi','kode_provinsi'
     * @queryParam filter[nama_provinsi] string Filter by nama provinsi. 
     * @queryParam filter[kode_provinsi] string Filter by kode provinsi. 
     * @queryParam filter[negara_id] string Filter by negara id. 
     * @queryParam sort string sort data berdasarkan kolom. tambah tanda (-) untuk DESC.
     * @queryParam page[number] integer optional
     * @queryParam page[size] integer oprional
     * @responseFile storage/responses/provinsi.json
     */
    public function generalListProvinsi()
    {
        $provinsi = QueryBuilder::for(Provinsi::class)
            ->allowedSorts(['negara_id','nama_provinsi','kode_provinsi'])
            ->allowedFilters(['negara_id','nama_provinsi','kode_provinsi',AllowedFilter::exact('id')])
            ->jsonPaginate()->appends(Request()->input());
        return new ProvinsiCollection($provinsi);
    }
    /**
     * DataProvider Provinsi
     * daftar collection provinsi dengan pagging
     * @queryParam fields[provinsi] string select kolom 'negara_id','nama_provinsi','kode_provinsi'
     * @queryParam filter[nama_provinsi] string Filter by nama provinsi. 
     * @queryParam filter[kode_provinsi] string Filter by kode provinsi. 
     * @queryParam filter[negara_id] string Filter by negara id. 
     * @queryParam sort string sort data berdasarkan kolom. tambah tanda (-) untuk DESC.
     * @queryParam page[number] integer optional
     * @queryParam page[size] integer oprional
     * @responseFile storage/responses/provinsi.json
     */
    public function listProvinsi()
    {
        $provinsi = QueryBuilder::for(Provinsi::class)
            ->allowedSorts(['negara_id','nama_provinsi','kode_provinsi'])
            ->allowedFilters(['negara_id','nama_provinsi','kode_provinsi',AllowedFilter::exact('id')])
            ->jsonPaginate()->appends(Request()->input());
        return new ProvinsiCollection($provinsi);
    }
    /**
     * View Provinsi
     * @urlParam id integer required
     * @apiResource App\Http\Resources\ProvinsiResource
     * @apiResourceModel App\Models\Provinsi
     */
    public function view($id)
    {
        $model = Provinsi::find($id);
        if(!is_null($model)){
            return new ProvinsiResource($model);
        }
        return response()->json([],204);
    }
    /**
     * List Provinsi by Negara
     * untuk list provinsi by negara
     * @urlParam id int required
     * @responseFile storage/responses/provinsiByNegara.list.json
     */
    public function listProvinsiNegara(Request $req)
    {
        return new ProvinsiCollection(Provinsi::where('negara_id',$req->id)->paginate());
    }
    /**
     * Create Provinsi
     * untuk create provinsi
     * @bodyParam nama_provinsi string required
     * @bodyParam negara_id int required
     * @bodyParam kode_provinsi string required
     * @responseFile storage/responses/provinsi.create.json
     */
    public function createProvinsi(Request $req)
    {   
        $model = new Provinsi();
        $model->fill($req->input());
        //validasi
        $validation = $model->validate();

        if(!$validation->fails()){
            $model->save();
            return response()->json([
                'status' => 'success',
                'message' => 'data berhasil disimpan!',
                'data' => new ProvinsiResource($model)
            ]);
        }

        return response()->json([
            'status' => 'failed',
            'message' => 'data gagal disimpan!',
            'data' => ['errors'=>$validation->errors()]
        ]);
    }
    /**
     * Update Provinsi
     * untuk update provinsi
     * @urlParam id integer required id provinsi
     * @bodyParam nama_provinsi string unique
     * @bodyParam negara_id int
     * @bodyParam kode_provinsi string unique
     * @responseFile storage/responses/provinsi.update.json
     */
    public function updateProvinsi(Request $req,$id)
    {
        $provinsi = $this->findData($id);
        //isi dengan data baru
        $provinsi->fill($req->input());
        //validasi input
        $validation = $provinsi->validate();
        //jika data valid
        if(!$validation->fails()){
            $provinsi->save();
            return response()->json([
                'status' => 'success',
                'message' => 'Kota berhasil diupdate',
                'data' => new ProvinsiResource($provinsi)
            ]);
        }

        return response()->json([
            'status' => 'failed',
            'message' => 'data gagal disimpan!',
            'data' => ['errors'=>$validation->errors()]
        ]);
    }
    /**
     * Delete Provinsi
     * untuk delete provinsi
     * @urlParam id int required
     * @responseFile storage/responses/provinsi.delete.json
     */
    public function deleteProvinsi(Request $req,$id)
    {
        $provinsi = $this->findData($id);
        //jika data provinsi sudah digunakan kota, maka tidak bisa dihapus
        if(count($provinsi->dataKota)==0){
            $provinsi->delete();
            return response()->json([
                'status' => 'success',
                'message' => 'Data Provinsi berhasil dihapus',
            ]);
        }

        return response()->json([
            'status' => 'failed',
            'message' => 'Data provinsi sudah digunakan, tidak bisa dihapus',
        ]);
    }

    //find data
    public function findData($id){
        $model = Provinsi::find($id);
        if(is_null($model)){
            throw new DataNotFound();
        }
        return $model;
    }
}
