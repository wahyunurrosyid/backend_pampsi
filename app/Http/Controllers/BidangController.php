<?php

namespace App\Http\Controllers;

use App\Exceptions\DataNotFound;
use App\Http\Resources\BidangCollection;
use App\Http\Resources\BidangResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedFilter;
use App\Models\Bidang;
use App\Models\User;

/**
 * @group Bidang
 * @authenticated
 */
class BidangController extends Controller
{
    /**
     * @group Public API
     * List Bidang
     * data bidang
     * @unauthenticated
     * @queryParam fields[bidang] string select kolom 'nama'
     * @queryParam filter[nama] string Filter by 'nama' 
     * @queryParam sort string sort data berdasarkan kolom. tambah tanda (-) untuk DESC.
     * @queryParam page[number] integer optional
     * @queryParam page[size] integer oprional
     * @responseFile storage/responses/bidang.json
     */
    public function generalListBidang()
    {
        $bidang = QueryBuilder::for(Bidang::class)
            ->allowedSorts(['nama'])
            ->allowedFilters(['nama',AllowedFilter::exact('id')])
            ->jsonPaginate()->appends(Request()->input());
        return new BidangCollection($bidang);
    }
    /**
     * View Bidang
     * untuk view bidang
     * @urlParam id integer required
     * @responseFile storage/responses/bidang.json
     */
    public function viewBidang($id)
    {
        $model = Bidang::find($id);
        if(!is_null($model)){
            return new BidangResource($model);
        }
        return response()->json([
            'status'=>'failed',
            'message'=>'Bidang tidak ditemukan',
            'data'=>[]
        ]);
    }
    /**
     * Create Bidang
     * untuk create bidang
     * @bodyParam nama string required unique
     * @responseFile storage/responses/bidang.create.json
     */
    public function createBidang(Request $req)
    {
        $model = new Bidang();
        $model->fill($req->input());
        //validasi
        $validation = $model->validate();

        if(!$validation->fails()){
            $model->save();
            return response()->json([
                'status' => 'success',
                'message' => 'data berhasil disimpan!',
                'data' => new BidangResource($model)
            ]);
        }

        return response()->json([
            'status' => 'failed',
            'message' => 'data gagal disimpan!',
            'data' => ['errors'=>$validation->errors()]
        ]);
    }
    /**
     * Update Bidang
     * untuk update bidang
     * @urlParam id integer required
     * @bodyParam nama string required
     * @responseFile storage/responses/bidang.update.json
     */
    public function updateBidang(Request $req,$id)
    {
        $bidang = $this->findData($id);
        //isi dengan data baru
        $bidang->fill($req->input());
        //validasi input
        $validation = $bidang->validate();
        //jika data valid
        if(!$validation->fails()){
            $bidang->save();
            return response()->json([
                'status' => 'success',
                'message' => 'Bidang berhasil diupdate',
                'data' => new BidangResource($bidang)
            ]);
        }

        return response()->json([
            'status' => 'failed',
            'message' => 'data gagal disimpan!',
            'data' => ['errors'=>$validation->errors()]
        ]);
    }
    /**
     * Delete Bidang
     * untuk delete bidang
     * @urlParam id integer required
     * @responseFile storage/responses/bidang.delete.json
     */
    public function deleteBidang($id)
    {
        $bidang = $this->findData($id);
        if(count($bidang->dataUser)==0){
            $bidang->delete();
            return response()->json([
                'status' => 'success',
                'message' => 'Data Bidang berhasil dihapus',
            ]);
        }

        return response()->json([
            'status' => 'failed',
            'message' => 'Data Bidang sudah digunakan, tidak bisa dihapus',
        ]);
    }

    //find data
    public function findData($id){
        $model = Bidang::find($id);
        if(is_null($model)){
            throw new DataNotFound();
        }
        return $model;
    }
}
