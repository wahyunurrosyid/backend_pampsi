<?php

namespace App\Http\Controllers;

use App\Models\Bidang;
use App\Models\HistoriPendidikan;
use App\Models\PengalamanKerja;
use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

/**
 * @group Cv
 * @authenticated
 */
class CvController extends Controller
{
    /**
     * generate cv
     */
    public function generateCv()
    {
        $user = Auth::user();
        $pengalamanKerja = PengalamanKerja::where('user_id',$user->id)->get();
        $pendidikan = HistoriPendidikan::where('user_id',$user->id)->get();
        $bidang = Bidang::where('id',$user->bidang_id)->first();
        if(@$user){
                $image = base64_encode(file_get_contents(base_path('public/upload/photo_profile/'.$user->id.'/'.$user->photo_profile)));
                $extension = explode('.',$user->photo_profile)[1];
                $pdf = PDF::loadView('cv.index',compact('user','pengalamanKerja','pendidikan','bidang','image','extension'));
                // return $pdf->download('cv-'.$user->username.'.pdf');
                $path = base_path('public/cv-user/');
                if(!is_dir($path)){
                    $dir = File::makeDirectory($path,0777,true);
                }else{
                    $dir = $path;
                }
                $fileName = 'cv-'.$user->username.'.pdf';
                $urlDownload = url('cv-user/'.$fileName);
                file_put_contents($path.'/'.$fileName,$pdf->output());
                return response()->json([
                    'status'=>'success',
                    'message'=>'Berhasil generate cv',
                    'data'=>$urlDownload
                ]);
        }
    }

    /**
     * delete Cv
     */
    public function deleteCv()
    {
        $user = Auth::user();
        if(@$user){
            $path = base_path('public/cv-user/cv-'.$user->username.'.pdf');
            File::delete($path);
            return response()->json([
                'status'=>'success',
                'message'=>'Berhasil menghapus cv',
            ]);
        }
    }
}
