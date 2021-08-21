<?php

namespace App\Http\Controllers;

use App\Http\Resources\SurveySoalResource;
use App\Models\Survey;
use App\Models\SurveySoal;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * @group Survey
 * @authenticated
 */
class SoalController extends Controller
{
    /**
     * Survey Soal create
     * untuk create soal
     * @bodyParam survey_id string required
     * @bodyParam soal text required
     * @bodyParam pilihan array required
     * @bodyParam tipe enum (single,multiple)
     */
    public function createSoal(Request $req)
    {
        $model = new SurveySoal;
        $model->fill($req->input());

        $reqPilihan = $req->pilihan;

        //pilihan
        $list = [];
        $index = 'A';
        for ($i = 0; $i < count($reqPilihan); $i++) {
            $list[$index++] = $reqPilihan[$i];
        }
        $pilihan = json_encode($list);
        $model->pilihan = $pilihan;

        $validation = $model->validate();
        if (!$validation->fails()) {
            $model->save();
            return response()->json([
                'status' => 'success',
                'message' => 'data berhasil disimpan!',
                'data' => new SurveySoalResource($model)
            ]);
        }
        return response()->json([
            'status' => 'failed',
            'message' => 'data gagal disimpan!',
            'data' => ['errors' => $validation->errors()]
        ]);
    }
    /**
     * Survey soal update
     * untuk update soal
     * @bodyParam soal text optional
     * @bodyParam key string optional (merupakan key dari pilihan)
     * @bodyParam value string optional
     */
    public function updateSoal(Request $req, $id)
    {
        $model = SurveySoal::where('id', $id)->first();

        if ($req->has('key') and $req->has('value')) {
            $key = $req->key;
            $decodePilihan = json_decode($model->pilihan);
            foreach ($decodePilihan as $d) {
                $decodePilihan->$key = $req->value;
            }
            $pilihan = json_encode($decodePilihan);
            $model->fill($req->input());
            $model->pilihan = $pilihan;
        } else {
            $model->fill($req->input());
        }
        $validation = $model->validate();

        if (!$validation->fails()) {
            $model->save();
            return response()->json([
                'status' => 'success',
                'message' => 'data berhasil diubah!',
                'data' => new SurveySoalResource($model)
            ]);
        }
        return response()->json([
            'status' => 'failed',
            'message' => 'data gagal diubah!',
            'data' => ['errors' => $validation->errors()]
        ]);
    }
    /**
     * Survey soal delete soal
     * @urlParam id integer required
     */
    public function deleteSoal($id)
    {
        $result = DB::transaction(function()use($id){
            try{
                $model = SurveySoal::findOrFail($id);
                if(@$model){
                    $model->delete();
                    return response()->json([
                        'status'=>'success',
                        'message'=>'Berhasil delete soal',
                        'data'=>$model
                    ]);
                }
                DB::commit();
            }catch(Exception $e){
                DB::rollBack();
                return $e->getMessage();
            }
        });

        return $result;
    }
    /**
     * Survey soal delete pilihan
     * @urlParam id integer required
     * @bodyParam key string
     */
    public function deletePilihanSoal(Request $req, $id)
    {
        $key = $req->key;
        $model = SurveySoal::where('id', $id)->first();
        $decodePilihan = json_decode($model->pilihan, true);
        $list = [];
        $index = 'A';
        for ($i = 0; $i < count($decodePilihan); $i++) {
            $in = $index++;
            if ($in != $key) {
                $list[] = $decodePilihan[$in];
            }
        }

        $listPilihan = [];
        $index1 = 'A';
        foreach ($list as $l) {
            $listPilihan[$index1++] = $l;
        }
        $pilihan = json_encode($listPilihan);
        $model->pilihan = $pilihan;
        $validation = $model->validate();

        if (!$validation->fails()) {
            $model->save();
            return response()->json([
                'status' => 'success',
                'message' => 'Berhasil hapus pilihan!',
                'data' => new SurveySoalResource($model)
            ]);
        }
        return response()->json([
            'status' => 'failed',
            'message' => 'Gagal hapus pilihan!',
            'data' => ['errors' => $validation->errors()]
        ]);
    }
    /**
     * Survey Soal create pilihan
     * @urlParam id integer required
     * @bodyParam value string optional
     */
    public function createPilihanSoal(Request $req, $id)
    {
        $value = $req->value;
        $model = SurveySoal::where('id', $id)->first();
        $decodePilihan = json_decode($model->pilihan, true);
        $list = [];
        foreach ($decodePilihan as $d) {
            $list[] = $d;
        }
        $list[] = $value;

        $listPilihan = [];
        $index = 'A';
        for ($i = 0; $i < count($list); $i++) {
            $listPilihan[$index++] = $list[$i];
        }
        $pilihan = json_encode($listPilihan);
        $model->pilihan = $pilihan;
        $validation = $model->validate();

        if (!$validation->fails()) {
            $model->save();
            return response()->json([
                'status' => 'success',
                'message' => 'Berhasil create pilihan!',
                'data' => new SurveySoalResource($model)
            ]);
        }
        return response()->json([
            'status' => 'failed',
            'message' => 'Gagal create pilihan!',
            'data' => ['errors' => $validation->errors()]
        ]);
    }

    /**
     * Create soal & pilihan
     * @bodyParam id integer optional
     * @bodyParam survey_id integer required
     * @bodyParam tipe enum required
     * @bodyParam soal string
     * @bodyParam pilihan array
     */
    public function soalPilihan(Request $req)
    {
        try{
            $list = [];
            $index = 'A';
            for ($i = 0; $i < count($req->pilihan); $i++) {
                $list[$index++] = $req->pilihan[$i];
            }
            $pilihan = json_encode($list);

            if(Request()->has('id')){
                $model = SurveySoal::updateOrCreate(
                    ['id'=>$req->id,'survey_id'=>$req->survey_id],
                    [
                        'survey_id'=>$req->survey_id,
                        'tipe'=>$req->tipe,
                        'soal'=>$req->soal,
                        'pilihan'=>$pilihan
                    ]
                );	
            }else{
                $model = SurveySoal::updateOrCreate(
                    ['survey_id'=>$req->survey_id,'soal'=>$req->soal],
                    [
                        'survey_id'=>$req->survey_id,
                        'tipe'=>$req->tipe,
                        'soal'=>$req->soal,
                        'pilihan'=>$pilihan
                    ]
                );
            }

            return response()->json([
                'status'=>'success',
                'message'=>'Berhasil menambahkan data',
                'data'=>$model
            ]);
        }catch(Exception $ex){
            return $ex->getMessage();
        }
    }
}
