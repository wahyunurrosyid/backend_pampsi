<?php

namespace App\Http\Controllers;

use App\Exceptions\DataNotFound;
use App\Http\Resources\FaqCollection;
use App\Http\Resources\FaqResource;
use App\Models\FAQ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * @group FAQ
 * @unauthenticated
 */
class FaqController extends Controller
{
    /**
     * List FAQ
     * untuk list FAQ dengan pagination
     * @responseFile storage/responses/faq.list.json
     */
    public function listFaq()
    {
        return new FaqCollection(FAQ::paginate());
    }
    /**
     * create FAQ
     * untuk create FAQ
     * @authenticated
     * @bodyParam pertanyaan integer required
     * @bodyParam jawaban integer required
     * @response{
     * {
     *   "status": "success",
     *   "message": "data berhasil disimpan!",
     *   "data": {
     *        "id": null,
     *        "pertanyaan": "1",
     *        "jawaban": "1"
     *     }
     *   }
     * }
     */
    public function createFaq(Request $req)
    {
        $auth = Auth::user();
        if(!is_null($auth)){
            $model = new FAQ();
            $model->fill($req->input());
            //validasi
            $validation = $model->validate();

            if(!$validation->fails()){
                $model->create([
                    'pertanyaan'=>$req->pertanyaan,
                    'jawaban'=>$req->jawaban,
                    'created_by'=>$auth->id
                ]);
                return response()->json([
                    'status' => 'success',
                    'message' => 'data berhasil disimpan!',
                    'data' => new FaqResource($model)
                ]);
            }

            return response()->json([
                'status' => 'failed',
                'message' => 'data gagal disimpan!',
                'data' => ['errors'=>$validation->errors()]
            ]);
        }
        return response()->json([
            'status'=>'failed',
            'message'=>'Silahkan login terlebih dahulu',
            'data'=>[]
        ]);
        
    }
    /**
     * update FAQ
     * untuk update FAQ
     * @authenticated
     * @urlParam id integer required
     * @bodyParam pertanyaan integer
     * @bodyParam jawaban integer
     * @response{
     * {
     *        "status": "success",
     *       "message": "Kota berhasil diupdate",
     *       "data": {
     *           "id": 1,
     *           "pertanyaan": 1,
     *           "jawaban": "2"
     *       }
     *   }
     * }
     */
    public function updateFaq(Request $req,$id)
    {
        $auth = Auth::user();
        $faq = $this->findData($id);
        //isi dengan data baru
        $faq->fill($req->input());
        //validasi input
        $validation = $faq->validate();
        //jika data valid
        if(!$validation->fails()){
            $faq->updated_by = $auth->id;
            $faq->save();
            return response()->json([
                'status' => 'success',
                'message' => 'Faq berhasil diupdate',
                'data' => new FaqResource($faq)
            ]);
        }

        return response()->json([
            'status' => 'failed',
            'message' => 'data gagal disimpan!',
            'data' => ['errors'=>$validation->errors()]
        ]);
    }
    /**
     * Delete FAQ
     * untuk delete FAQ
     * @authenticated
     * @urlParam id integer required
     */
    public function deleteFaq($id)
    {
        $faq = $this->findData($id);
        
        if(!is_null($faq)){
            $faq->delete();
            return response()->json([
                'status' => 'success',
                'message' => 'Data FAQ berhasil dihapus',
            ]);
        }

        return response()->json([
            'status' => 'failed',
            'message' => 'Data FAQ tidak ditemukan',
        ]);
    }
    
    //find data
    public function findData($id){
        $model = FAQ::find($id);
        if(is_null($model)){
            throw new DataNotFound();
        }
        return $model;
    }
}
