<?php

namespace App\Http\Controllers;

use App\Exceptions\DataNotFound;
use App\Http\Resources\RekomendasiCollection;
use App\Http\Resources\RekomendasiResource;
use App\Models\Rekomendasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * @group Rekomendasi
 * @authenticated
 */
class RekomendasiController extends Controller
{
    /**
     * List Rekomendasi
     * untuk list rekomendasi
     * @urlParam id integer required
     * @apiResource App\Http\Resources\RekomendasiCollection
     * @apiResourceModel App\Models\Rekomendasi
     */
    public function listRekomendasi($id)
    {
        $model = Rekomendasi::where('penerima_rekomendasi',$id)->with(['dataPenerima','dataPemberi'])->get();
        if(!is_null($model)){
            return $model;
        }
        return response()->json([],204);
    }
    /**
     * List Rekomendasi Public
     * untuk list rekomendasi
     * @group Public API
     * @unauthenticated
     * @urlParam id integer required
     * @apiResource App\Http\Resources\RekomendasiCollection
     * @apiResourceModel App\Models\Rekomendasi
     */
    public function listRekomendasiPublic($id)
    {
        $model = Rekomendasi::where('penerima_rekomendasi',$id)->with(['dataPenerima','dataPemberi'])->get();
        if(!is_null($model)){
            return $model;
        }
        return response()->json([],204);
    }
    /**
     * Create Rekomendasi
     * untuk create rekomendasi
     * @bodyParam penerima_rekomendasi integer required
     * @bodyParam catatan string optional
     * @apiResource App\Http\Resources\RekomendasiResource
     * @apiResourceModel App\Models\Rekomendasi
     */
    public function createRekomendasi(Request $req)
    {
        $auth = Auth::user();
        $model = new Rekomendasi();
        $model->fill($req->input());
        //validasi
        $validation = $model->validate();

        if(!$validation->fails()){
            $model->pemberi_rekomendasi = $auth->id;
            $model->save();
            return response()->json([
                'status' => 'success',
                'message' => 'data berhasil disimpan!',
                'data' => new RekomendasiResource($model)
            ]);
        }

        return response()->json([
            'status' => 'failed',
            'message' => 'data gagal disimpan!',
            'data' => ['errors'=>$validation->errors()]
        ]);
    }
    /**
     * Update Rekomendasi
     * untuk update rekomendasi, hanya pemberi dan penerima rekomendasi yang bisa update
     * @urlParam id integer required
     * @bodyParam penerima_rekomendasi integer optional
     * @bodyParam catatan string optional
     * @apiResource App\Http\Resources\RekomendasiResource
     * @apiResourceModel App\Models\Rekomendasi
     */
    public function updateRekomendasi(Request $req,$id)
    {
        $rekomendasi = $this->findData($id);
        $this->authorize('updateRekomendasi',[Rekomendasi::class,$rekomendasi->pemberi_rekomendasi,$rekomendasi->penerima_rekomendasi]);
        //isi dengan data baru
        $rekomendasi->fill($req->input());
        //validasi input
        $validation = $rekomendasi->validate();
        //jika data valid
        if(!$validation->fails()){
            $rekomendasi->save();
            return response()->json([
                'status' => 'success',
                'message' => 'Rekomendasi berhasil diupdate',
                'data' => new RekomendasiResource($rekomendasi)
            ]);
        }

        return response()->json([
            'status' => 'failed',
            'message' => 'data gagal disimpan!',
            'data' => ['errors'=>$validation->errors()]
        ]);
    }
    /**
     * Delete Rekomendasi
     * untuk hapus rekomendasi, hanya pemberi dan penerima rekomendasi yang bisa hapus
     * @urlParam id integer required
     * @response{
     *      "status": "success",
     *      "message": "Data Rekomendasi berhasil dihapus"
     *   }
     */
    public function deleteRekomendasi($id)
    {
        $rekomendasi = $this->findData($id);
        $this->authorize('deleteRekomendasi',[Rekomendasi::class,$rekomendasi->pemberi_rekomendasi,$rekomendasi->penerima_rekomendasi]);
        if(!is_null($rekomendasi)){
            $rekomendasi->delete();
            return response()->json([
                'status' => 'success',
                'message' => 'Data Rekomendasi berhasil dihapus',
            ]);
        }

        return response()->json([
            'status' => 'failed',
            'message' => 'Data rekomendasi tidak ditemukan',
        ]);
    }

    //find data
    public function findData($id){
        $model = Rekomendasi::find($id);
        if(is_null($model)){
            throw new DataNotFound();
        }
        return $model;
    }
}
