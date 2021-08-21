<?php

namespace App\Http\Controllers;

use App\Exceptions\DataNotFound;
use App\Http\Resources\NegaraCollection;
use App\Http\Resources\NegaraResource;
use App\Http\Resources\ProvinsiResource;
use App\Models\Negara;
use App\Models\Provinsi;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedFilter;

/**
 * @group Negara
 * @authenticated
 */
class NegaraController extends Controller
{
    /**
     * @group Public API
     * List Negara
     * data negara
     * @unauthenticated
     * @queryParam fields[negara] string select kolom 'nama_negara','kode_negara'
     * @queryParam filter[nama_negara] string Filter by nama negara. 
     * @queryParam filter[kode_negara] string Filter by nama negara. 
     * @queryParam sort string sort data berdasarkan kolom. tambah tanda (-) untuk DESC.
     * @queryParam page[number] integer optional
     * @queryParam page[size] integer oprional
     * @responseFile storage/responses/negara.json
     */
    public function generalListNegara()
    {
        $negara = QueryBuilder::for(Negara::class)
            ->allowedSorts(['nama_negara','kode_negara'])
            ->allowedFilters(['nama_negara','kode_negara',AllowedFilter::exact('id')])
            ->jsonPaginate()->appends(Request()->input());
        return new NegaraCollection($negara);
    }
    /**
     * DataProvider Negara
     * daftar collection negara dengan pagging
     * @queryParam fields[negara] string select kolom 'nama_negara','kode_negara'
     * @queryParam filter[nama_negara] string Filter by nama negara. 
     * @queryParam filter[kode_negara] string Filter by nama negara. 
     * @queryParam sort string sort data berdasarkan kolom. tambah tanda (-) untuk DESC.
     * @queryParam page[number] integer optional
     * @queryParam page[size] integer oprional
     * @responseFile storage/responses/negara.json
     */
    public function listNegara()
    {
        $negara = QueryBuilder::for(Negara::class)
            ->allowedSorts(['nama_negara','kode_negara'])
            ->allowedFilters(['nama_negara','kode_negara',AllowedFilter::exact('id')])
            ->jsonPaginate()->appends(Request()->input());
        return new NegaraCollection($negara);
    }
    /**
     * View Negara
     * @urlParam id integer required
     * @apiResource App\Http\Resources\NegaraResource
     * @apiResourceModel App\Models\Negara
     */
    public function view($id)
    {
        $model = Provinsi::find($id);
        if(!is_null($model)){
            return new ProvinsiResource($model);
        }
        return response()->json([
            'status'=>'failed',
            'message'=>'Provinsi tidak ditemukan',
            'data'=>[]
        ],204);
    }
    /**
     * Create Negara
     * untuk create negara
     * @bodyParam nama_negara string required unique
     * @bodyParam kode_negara string required unique
     * @responseFile storage/responses/negara.create.json
     */
    public function createNegara(Request $req)
    {
        $model = new Negara();
        $model->fill($req->input());
        //validasi
        $validation = $model->validate();

        if(!$validation->fails()){
            $model->save();
            return response()->json([
                'status' => 'success',
                'message' => 'data berhasil disimpan!',
                'data' => new NegaraResource($model)
            ]);
        }

        return response()->json([
            'status' => 'failed',
            'message' => 'data gagal disimpan!',
            'data' => ['errors'=>$validation->errors()]
        ]);
    }
    /**
     * Update Negara
     * untuk update negara
     * @urlParam id int required
     * @bodyParam nama_negara string
     * @bodyParam kode_negara string unique
     * @responseFile storage/responses/negara.update.json
     */
    public function updateNegara(Request $req,$id)
    {
        $negara = $this->findData($id);
        //isi dengan data baru
        $negara->fill($req->input());
        //validasi input
        $validation = $negara->validate();
        //jika data valid
        if(!$validation->fails()){
            $negara->save();
            return response()->json([
                'status' => 'success',
                'message' => 'Negara berhasil diupdate',
                'data' => new NegaraResource($negara)
            ]);
        }

        return response()->json([
            'status' => 'failed',
            'message' => 'data gagal disimpan!',
            'data' => ['errors'=>$validation->errors()]
        ]);

    }
    /**
     * Delete Negara
     * untuk delete negara
     * @urlParam id int required
     * @responseFile storage/responses/negara.delete.json
     */
    public function deleteNegara(Request $req,$id)
    {
        $negara = $this->findData($id);
        if(count($negara->dataProvinsi==0)){
            $negara->delete();
            return response()->json([
                'status' => 'success',
                'message' => 'Data Negara berhasil dihapus',
            ]);
        }

        return response()->json([
            'status' => 'failed',
            'message' => 'Data Negara sudah digunakan, tidak bisa dihapus',
        ]);
    }

    //find data
    public function findData($id){
        $model = Negara::find($id);
        if(is_null($model)){
            throw new DataNotFound();
        }
        return $model;
    }
}
