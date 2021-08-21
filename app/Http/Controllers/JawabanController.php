<?php

namespace App\Http\Controllers;

use App\Http\Resources\SurveyJawabanResource;
use App\Models\SurveyJawaban;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * @group Public API
 */
class JawabanController extends Controller
{
    /**
     * Survey soal jawaban create
     * untuk create jawaban pada soal
     * @urlParam id string required
     * @bodyParam nama string required
     * @bodyParam email string required
     * @bodyParam jawaban array required
     */
    public function createJawaban(Request $req, $id)
    {
        $model = new SurveyJawaban;
        if(@app('auth')->user()->email){
            if(@app('auth')->user()->email != $req->email){
                return response()->json([
                    'status'=>'failed',
                    'message'=>'Email anda tidak sesuai dengan email akun anda!',
                    'data'=>[]
                ],403);
            }
            $model->nama = $req->nama;
            $model->email = $req->email;
        }else{
            $model->nama = $req->nama;
            $model->email = 'pampsi@gmail.com';
        }
        $model->survey_id = $id;
        $model->jawaban = json_encode($req->jawaban);
        $model->save();
        return response()->json([
            'status' => 'success',
            'message' => 'data berhasil disimpan!',
            'data' => new SurveyJawabanResource($model)
        ]);
    }
}
