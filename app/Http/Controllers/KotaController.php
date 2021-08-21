<?php

namespace App\Http\Controllers;

use App\Exceptions\DataNotFound;
use App\Http\Resources\KotaCollection;
use App\Http\Resources\KotaResource;
use App\Models\Kota;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedFilter;

/**
 * @group Kota
 * @authenticated
 */
class KotaController extends Controller
{
    /**
     * @group Public API
     * List Kota
     * data kota
     * @unauthenticated
     * @queryParam fields[kota] string select kolom 'provinsi_id','nama_kota','kode_kota'
     * @queryParam filter[nama_kota] string Filter by nama kota. 
     * @queryParam filter[kode_kota] string Filter by kode kota. 
     * @queryParam filter[provinsi_id] string Filter by provinsi id. 
     * @queryParam sort string sort data berdasarkan kolom. tambah tanda (-) untuk DESC.
     * @queryParam page[number] integer optional
     * @queryParam page[size] integer oprional
     * @responseFile storage/responses/kota.json
     */
    public function generalListKota()
    {
        $kota = QueryBuilder::for(Kota::class)
            ->allowedSorts(['provinsi_id','nama_kota','kode_kota'])
            ->allowedFilters(['provinsi_id','nama_kota','kode_kota',AllowedFilter::exact('id')])
            ->jsonPaginate()->appends(Request()->input());
        return new KotaCollection($kota);
    }
    /**
     * DataProvider Kota
     * daftar collection kota dengan pagging
     * @queryParam fields[kota] string select kolom 'provinsi_id','nama_kota','kode_kota'
     * @queryParam filter[nama_kota] string Filter by nama kota. 
     * @queryParam filter[kode_kota] string Filter by kode kota. 
     * @queryParam filter[provinsi_id] string Filter by provinsi id. 
     * @queryParam sort string sort data berdasarkan kolom. tambah tanda (-) untuk DESC.
     * @queryParam page[number] integer optional
     * @queryParam page[size] integer oprional
     * @responseFile storage/responses/kota.json
     */
    public function listKota()
    {
        $kota = QueryBuilder::for(Kota::class)
            ->allowedSorts(['provinsi_id','nama_kota','kode_kota'])
            ->allowedFilters(['provinsi_id','nama_kota','kode_kota',AllowedFilter::exact('id')])
            ->jsonPaginate()->appends(Request()->input());
        return new KotaCollection($kota);
    }
    /**
     * View Kota
     * @urlParam id integer required
     * @apiResource App\Http\Resources\KotaResource
     * @apiResourceModel App\Models\Kota
     */
    public function view($id)
    {
        $model = Kota::find($id);
        if(!is_null($model)){
            return new KotaResource($model);
        }
        return response()->json([],204);
    }
    /**
     * List Kota by Provinsi
     * list kota by provinsi dengan paging
     * @urlParam id integer required id provinsi
     * @responseFile storage/responses/kotaByProvinsi.list.json
     */
    public function listKotaProvinsi(Request $req)
    {
        return new KotaCollection(Kota::where('provinsi_id',$req->id)->paginate());
    }
    /**
     * Create Kota
     * untuk create kota
     * @bodyParam id int required
     * @bodyParam provinsi_id int required
     * @bodyParam nama_kota string required
     * @bodyParam kode_kota string required
     * @responseFile storage/responses/kota.create.json
     */
    public function createKota(Request $req)
    {
        $model = new Kota();
        $model->fill($req->input());
        //validasi
        $validation = $model->validate();

        if(!$validation->fails()){
            $model->save();
            return response()->json([
                'status' => 'success',
                'message' => 'data berhasil disimpan!',
                'data' => new KotaResource($model)
            ]);
        }

        return response()->json([
            'status' => 'failed',
            'message' => 'data gagal disimpan!',
            'data' => ['errors'=>$validation->errors()]
        ]);
    }
    /**
     * Update Kota
     * untuk update kota
     * @urlParam id required id kota
     * @bodyParam provinsi_id int
     * @bodyParam nama_kota string unique
     * @bodyParam kode_kota string unique
     * @responseFile storage/responses/kota.update.json
     */
    public function updateKota(Request $req, $id)
    {
        $kota = $this->findData($id);
        //isi dengan data baru
        $kota->fill($req->input());
        //validasi input
        $validation = $kota->validate();
        //jika data valid
        if(!$validation->fails()){
            $kota->save();
            return response()->json([
                'status' => 'success',
                'message' => 'Kota berhasil diupdate',
                'data' => new KotaResource($kota)
            ]);
        }

        return response()->json([
            'status' => 'failed',
            'message' => 'data gagal disimpan!',
            'data' => ['errors'=>$validation->errors()]
        ]);
    }
    /**
     * Delete Kota
     * untuk delete kota
     * @urlParam id integer required id kota
     * @responseFile storage/responses/kota.delete.json
     */
    public function deleteKota(Request $req, $id)
    {
        $kota = $this->findData($id);
        
        if(!is_null($kota)){
            $kota->delete();
            return response()->json([
                'status' => 'success',
                'message' => 'Data Kota berhasil dihapus',
            ]);
        }

        return response()->json([
            'status' => 'failed',
            'message' => 'Data Kota tidak ditemukan',
        ]);
    }

    //find data
    public function findData($id){
        $model = Kota::find($id);
        if(is_null($model)){
            throw new DataNotFound();
        }
        return $model;
    }
}
