<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use App\Jobs\LengkapiProfil;
use App\Jobs\ProcessVerifikasi;
use App\Models\TokenFcm;
use Carbon\Carbon;
use Exception;
use Tymon\JWTAuth\Exceptions\JWTException;
use Laravel\Lumen\Http\Redirector;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Kreait\Firebase\Factory;

/**
 * @group Auth
 */
class LoginController extends Controller
{
    public $loginURL = 'https://pam.gamifindo.com';
    
    /**
     * Login
     * untuk login user
     * @bodyParam username string required. Example: admin
     * @bodyParam password string required. Example: bmmrhdb2021!
     * @response{
     * "status":"success",
     * "message":"user berhasil login",
     * "data":{
     * "token":"token",
     * "user":"user"
     * }
     * }
     */
    public function login(Request $request)
    {   
        //coba login
        try {
            if (!$token = app('auth')->attempt($request->only('username', 'password'))) {
                $user = User::where('username',$request->username)->first();
                if(is_null($user)){
                    return response()->json([
                        'status' => 'failed',
                        'message' => 'Username salah!'
                    ],400);
                }else{
                    return response()->json([
                        'status' => 'failed',
                        'message' => 'Password salah!'
                    ],400);
                }
            }
        } catch (JWTException $e) {
            return response()->json([
                'status' => 'failed',
                'message' => 'Token tidak dapat digenerate'
            ],500);
        }

        //jika credential valid
        //cek apakah aktif?
        $user = app('auth')->user($token);
        
        if(!$user->is_aktif){
            return response()->json([
                'status' => 'failed',
                'message' => 'Akun Anda di-nonaktifkan, silahkan hubungi admin',
            ]);
        }else{
            //cek apakah sudah verified
            if($user->role_id==3){//akun psikolog
                if(is_null($user->email_verified_at)){
                    return response()->json([
                        'status' => 'failed',
                        'message' => 'Akun belum diverifikasi, silakan cek inbox email untuk proses verifikasi.',
                    ]);
                }
    
                //cek apakah sudah verifikasi admin
                if(is_null($user->status != 2)){
                    return response()->json([
                        'status' => 'success',
                        'message' => 'Profile Anda belum diverifikasi admin, silahkan lengkapi dan tunggu proses verifikasi nya.',
                        'data'=>['token'=>$token,'user'=>$user]
                    ]);
                }
            }
        }

        //bebas hambatan akun admin dan kampus
        $modelUser = User::find($user->id);
        $modelUser->last_login = Carbon::now();
        $modelUser->save();
        return response()->json([
            'status' => 'success',
            'message' => 'User berhasil login',
            'data' => ['token' => $token,'user' => $user]
        ]);
        
    }

    /**
     * Logout
     * untuk logout user
     * @bodyParam token string required
     * @response{
     * "status":"success",
     * "message":"logout berhasil",
     * "data":[]
     * }
     */
    public function logout()
    {
        $auth = Auth::user();
        if(!is_null($auth)){
            $token = auth()->invalidate('token');
            if($token){
            return response()->json([
                'status' => 'success',
                'message' => 'Logout berhasil!',
                'data' => []
            ]);
            }else{
                return response()->json([
                    'status' => 'failed',
                    'message' => 'Tidak ada token!',
                    'data' => []
                ]);
            }
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Anda sudah logout!',
            'data' => []
            ]);
        
    }

    /**
     * Verifikasi
     * untuk verifikasi user
     * @urlParam id required
     * @response{
     * "status":"true"
     * }
     */
    public function verifikasi(Request $request)
    {
        //decrypt id yang dihash dari email
        $id = Crypt::decrypt($request->id);
        $user = User::where('id', $id)->first();

        if($user->email_verified_at != null){
            return new RedirectResponse($this->loginURL);
        }else{
            //update data verifikasi
            $user->email_verified_at = date('Y-m-d H:i:s');
            $user->save();

            dispatch(new LengkapiProfil($user));

            return new RedirectResponse($this->loginURL);
        }
    }

    /**
     * resend verifikasi
     * @bodyParam email string
     */
    public function resendVerifikasi(Request $req)
    {
        $result = DB::transaction(function()use($req){
            try{
                if(Request()->has('email')){
                    $model = User::where('email',$req->email)->first();
                    if(!is_null($model)){
                        $model->delete();
                        $newModel = new User;
                        $newModel->id = $model->id;
                        $newModel->username = $model->username;
                        $newModel->email = $model->email;
                        $newModel->email_verified_at = $model->email_verified_at;
                        $newModel->password = app('hash')->make('Pampsi2021!');
                        $newModel->role_id = $model->role_id;
                        $newModel->status = $model->status;
                        $newModel->is_aktif = $model->is_aktif;
                        $newModel->created_at = $model->created_at;
                        $newModel->updated_at = $model->updated_at;
                        $newModel->nama_lengkap = $model->nama_lengkap;
                        $newModel->member_id = $model->member_id;
                        $newModel->tempat_lahir = $model->tempat_lahir;
                        $newModel->tanggal_lahir = $model->tanggal_lahir;
                        $newModel->kota1_id = $model->kota1_id;
                        $newModel->kota2_id = $model->kota2_id;
                        $newModel->no_hp = $model->no_hp;
                        $newModel->universitas_id = $model->universitas_id;
                        $newModel->jurusan_id = $model->jurusan_id;
                        $newModel->bidang_id = $model->bidang_id;
                        $newModel->tahun_masuk = $model->tahun_masuk;
                        $newModel->tahun_lulus = $model->tahun_lulus;
                        $newModel->nomor_ijazah = $model->nomor_ijazah;
                        $newModel->no_sipp = $model->no_sipp;
                        $newModel->skill_kompetensi = json_encode($model->skill_kompetensi);
                        $newModel->profile_singkat = $model->profile_singkat;
                        $newModel->longitude = $model->longitude;
                        $newModel->latitude = $model->latitude;
                        $newModel->jenis_kelamin = $model->jenis_kelamin;
                        $newModel->photo_profile = $model->photo_profile;
                        $newModel->akun_verified_at = $model->akun_verified_at;
                        $newModel->akun_verified_by = $model->akun_verified_by;
                        $newModel->agama = $model->agama;
                        $newModel->layanan = $model->layanan;
                        $newModel->biro = json_encode($model->biro);
                        $newModel->password_no_hash = 'Pampsi2021!';
                        $newModel->save();
                        DB::commit();
                        dispatch(new ProcessVerifikasi($newModel));
                        return response()->json([
                            'status'=>'success',
                            'message'=>'Berhasil mengirim ulang verifikasi email!'
                        ]);
                    }else{
                        DB::rollBack();
                        return response()->json([
                            'status'=>'failed',
                            'message'=>'Email tidak terdaftar!'
                        ],402);
                    }
                }
            }catch(Exception $e){
                DB::rollBack();
                return $e->getMessage();
            }
        });

        return $result;
    }

    /**
     * Token FCM
     * @authenticated
     * untuk insert token fcm
     * @bodyParam token string required
     */
    public function fcmToken(Request $req)
    {
        $auth = Auth::user();
        $token = TokenFcm::updateOrCreate(['user_id'=>$auth->id],['user_id'=>$auth->id,'token'=>$req->token]);
        return $token;
    }

}
