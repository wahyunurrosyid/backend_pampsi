<?php

namespace App\Http\Controllers;

use App\Exceptions\DataNotFound;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * @group Jumlah
 * @unauthenticated
 */
class JumlahController extends Controller
{
    /**
     * Jumlah model
     * @urlParam model string
     * @queryParam child string
     */
    public function jumlahModel(Request $req,$model)
    {
        $namaModel = ucfirst($model);
        $pathModel="App\Models\\$namaModel";
        switch($namaModel){
            case 'User':
                if($req->has('child')){
                    if(ucfirst($req->child)=='Laki-laki'){
                        $query = $pathModel::where('jenis_kelamin','Laki-laki')->count();
                    }
                    if(ucfirst($req->child)=='Perempuan'){
                        $query = $pathModel::where('jenis_kelamin','Perempuan')->count();
                    }
                    if(ucfirst($req->child)=='Provinsi'){
                        $query = DB::select("select nama_provinsi, kota.provinsi_id, COUNT( * ) as total from users inner join kota on kota.id = kota1_id 
                                                inner join provinsi on provinsi.id = kota.provinsi_id group by nama_provinsi, kota.provinsi_id limit 6");
                    }
                    return $query;
                }
                break;
            case 'Artikel':
                $query = $pathModel::count();
                return $query;
                break;
            case 'Survey':
                $query = $pathModel::count();
                return $query;
                break;
            case 'SurveyJawaban':
                if($req->has('child')){
                    $query = $pathModel::where('survey_id',$req->child)->count();
                    return $query;
                }else{
                    $query = $pathModel::join('survey','survey.id','=','survey_jawaban.survey_id')
                                        ->where('survey.user_id',Auth::user()->id)->count();
                    return $query;
                }
                break;
            default:
                return response()->json('DataNotFound',404);
        }
    }
}
