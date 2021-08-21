<?php

namespace App\Http\Controllers;

use App\Exceptions\DataNotFound;
use App\Http\Resources\UniversitasCollection;
use App\Http\Resources\UniversitasResource;
use App\Models\Jurusan;
use App\Models\Universitas;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

/**
 * @group Universitas
 * @authenticated
 */
class UniversitasController extends Controller
{
    /**
     * @group Public API
     * List Universitas
     * data universitas tanpa paging
     * @unauthenticated
     * @queryParam fields[universitas] string select kolom 'nama'
     * @queryParam filter[nama] string Filter by nama universitas. 
     * @queryParam sort string sort data berdasarkan kolom. tambah tanda (-) untuk DESC.
     * @queryParam include string get data relasi (dataJurusan). 
     * @responseFile storage/responses/universitas.json
     * 
     */
    public function generalListUniversitas()
    {
        $universitas = QueryBuilder::for(Universitas::class)
            //->allowedIncludes(['jurusan'])
            ->allowedSorts(['nama'])
            ->allowedFilters(['nama',AllowedFilter::exact('universitas_id')])
            ->jsonPaginate()->appends(Request()->input());

        return new UniversitasCollection($universitas);
    }
    /**
     * DataProvider Universitas
     * daftar collection universitas dengan pagging
     * @queryParam fields[universitas] string select kolom.
     * @queryParam filter[nama] string Filter by nama universitas. 
     * @queryParam sort string sort data berdasarkan kolom. tambah tanda (-) untuk DESC.
     * @queryParam include string get data relasi (dataJurusan). 
     * @queryParam page[number] integer nomor halaman.
     * @queryParam page[size] integer jumlah item per halaman.
     * @queryParam page[number] integer optional
     * @queryParam page[size] integer oprional 
     * @responseFile storage/responses/universitas.list.json
     * 
     */
    public function listUniversitas()
    {
        $universitas = QueryBuilder::for(Universitas::class)
            //->allowedIncludes(['jurusan'])
            ->allowedSorts(['nama'])
            ->allowedFilters(['nama',AllowedFilter::exact('id')])
            ->jsonPaginate()->appends(Request()->input());
        
        return new UniversitasCollection($universitas);
    }
    /**
     * View Universitas
     * 
     * @urlParam id integer required
     * @queryParam include string get data relasi (dataJurusan).
     * @apiResource App\Http\Resources\UniversitasResource
     * @apiResourceModel App\Models\Universitas
     */
    public function view($id)
    {
        //$model = Universitas::find($id);
        $model = $this->findData($id);
        return new UniversitasResource($model);
    }


    /**
     * Create Universitas
     * untuk create universitas
     * @bodyParam nama string required
     * @responseFile storage/responses/universitas.create.json
     */
    public function createUniversitas(Request $req)
    {
        $model = new Universitas();
        $model->fill($req->input());
        //validasi
        $validation = $model->validate();

        if(!$validation->fails()){
            $model->save();
            return response()->json([
                'status' => 'success',
                'message' => 'data berhasil disimpan!',
                'data' => new UniversitasResource($model)
            ]);
        }

        return response()->json([
            'status' => 'failed',
            'message' => 'data gagal disimpan!',
            'data' => ['errors'=>$validation->errors()]
        ]);
    }
    /**
     * Update Universitas
     * untuk update universitas
     * @urlParam id integer required id universitas
     * @bodyParam nama string required nama harus unik dari yg lain
     * @responseFile storage/responses/universitas.create.json
     * 
     */
    public function updateUniversitas(Request $req, $id)
    {
        $universitas = $this->findData($id);
        //isi dengan data baru
        $universitas->fill($req->input());
        //validasi input
        $validation = $universitas->validate();
        //jika data valid
        if(!$validation->fails()){
            $universitas->save();
            return response()->json([
                'status' => 'success',
                'message' => 'Universitas berhasil diupdate',
                'data' => new UniversitasResource($universitas)
            ]);
        }

        return response()->json([
            'status' => 'failed',
            'message' => 'data gagal disimpan!',
            'data' => ['errors'=>$validation->errors()]
        ]);
    }
    /**
     * Delete Universitas
     * untuk delete universitas
     * @urlParam id required id universitas
     * @response{
     * "status":"success",
     * "message":"Data Universitas berhasil dihapus"
     * }
     */
    public function deleteUniversitas(Request $req, $id)
    {
        $universitas = $this->findData($id);
        //hapus data jika belum memiliki jurusan
        if(count($universitas->dataJurusan)==0){
            $universitas->delete();
            return response()->json([
                'status' => 'success',
                'message' => 'Data Universitas berhasil dihapus',
            ]);
        }

        //jika sudah memiliki jurusan
        return response()->json([
            'status' => 'failed',
            'message' => 'Data universitas sudah digunakan, tidak bisa dihapus',
        ]);
    }

    //find data
    public function findData($id){
        $model = Universitas::find($id);
        if(is_null($model)){
            throw new DataNotFound();
        }
        return $model;
    }
}
