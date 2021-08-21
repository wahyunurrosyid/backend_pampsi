<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\HistoriPendidikanCollection;
use App\Http\Resources\HistoriPendidikanResource;
use App\Http\Resources\PengalamanCollection;
use App\Jobs\IgnoredAccountJob;
use App\Jobs\ProcessConfirmed;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\HistoriPendidikan;
use App\Models\PengalamanKerja;
use App\Notifications\ConfirmedAccount;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Jobs\TungguVerifikasiAdmin;
use Exception;

/**
 * @group Psikolog
 * @authenticated
 */
class UserController extends Controller
{
    /**
     * @group Registrasi
     * Register akun Psikolog
     * untuk pendaftaran akun user psikolog
     * @unauthenticated
     * @bodyParam username string required
     * @bodyParam email email required
     * @bodyParam password password required
     * 
     * @response{
     * "status": "success/failed",
     * "message": "Pendaftaran Berhasil",
     * "data": "user"
     * }
     */
    public function register(Request $request)
    {
        return $this->createUser($request);
    }

    //for create user
    public function createUser($request)
    {
        $rules = [
            'username' => 'required|unique:users|min:8',
            'email' => 'required|unique:users|email',
            'password' => 'required|string|min:8|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/|regex:/[@$!%*#?&]/',
        ];

        $msg = [
            'required' => ':attribute harus diisi!',
            'unique' => ':attribute sudah digunakan!',
            'min' => 'kolom :attribute minimal harus :min karakter!',
            'regex' => 'Komposisi karakter belum memenuhi syarat, minimal mengandung : huruf kecil, huruf besar, angka, dan karakter spesial',
        ];
    
        //validasi form
        $this->validate($request, $rules, $msg);

        //create user
        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = app('hash')->make($request->password);
        $user->password_no_hash = $request->password;
        $user->role_id = 3;
        $user->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Pendaftaran Berhasil',
            'data' => $user
        ], 201);
    }
    /**
     * @group Registrasi
     * Input data alumni 
     * untuk isi profile pendaftar setelah verifikasi
     * @authenticated
     * @bodyParam tahun_masuk integer required
     * @bodyParam tahun_lulus integer required
     * @bodyParam jurusan_id integer required
     * @bodyParam universitas_id integer required
     * @bodyParam nomor_ijazah string required
     * @bodyParam nama_lengkap string required
     * @bodyParam tempat_lahir string required
     * @bodyParam kota1_id integer required
     * @bodyParam kota2_id integer optional
     * @bodyParam no_hp integer required
     * @bodyParam bidang_id integer required
     * @response{
     * "status": "success/failed",
     * "message": "Update user Berhasil",
     * "data": "user"
     * }
     */
    public function update(Request $request)
    {
        return $this->updateUser($request);
    }

    //for update user
    public function updateUser($req)
    {
        $rules = [
            'tahun_masuk' => 'required|integer',
            'tahun_lulus' => 'required|integer',
            'jurusan_id' => 'required|integer',
            'universitas_id' => 'required|integer',
            'nomor_ijazah' => 'required|unique:users,nomor_ijazah',
            'nama_lengkap' => 'required|unique:users,nama_lengkap',
            'tempat_lahir' => 'required|string',
            'kota1_id' => 'required|integer',
            'no_hp' => 'required|integer',
            'bidang_id' => 'required|integer'
        ];

        //validasi form
        $this->validate($req, $rules);

        $auth = Auth::user();
        $user = User::find($auth->id);
        
        if(!is_null($user)){
            $user->fill($req->input());
            $user->status = 2;
            $user->save();
            dispatch(new TungguVerifikasiAdmin($user));
            activity()->causedBy($user->id)->log('Berhasil melakukan registrasi');
            return response()->json([
                'status' => 'success',
                'message' => 'Update user berhasil',
                'data' => $user
            ],200);
        }else{
            return response()->json([
                'status' => 'failed',
                'message' => 'User tidak ditemukan',
                'data' => $user
            ],402);
        }
    }
    /**
     * @group Registrasi
     * List registran
     * untuk list pendaftar yang ada didaftar alumni
     * @response{
     * [
     *      {
     *   "id": 12,
     *   "nama": "bayu",
     *   "status": 0
     *      }
     *  ]
     * }
     */
    public function listRegistran()
    {
        $registran = User::join('data_alumni', 'users.nomor_ijazah', '=','data_alumni.no_ijazah')
                        ->join('kota', 'users.kota1_id', '=', 'kota.id')
                        ->where('status', 1)
                        ->select('users.id', 'data_alumni.nama','users.status','users.no_hp','kota.nama_kota','users.photo_profile')->get();

        return $registran;
    }
    /**
     * @group Registrasi
     * unlist registran
     * untuk pendaftar yang tidak terdaftar di data alumni
     * 
     * @response[
     *      {
     *           "id": 13,
     *           "status": 0,
     *           "nomor_ijazah": "76858576",
     *           "no_ijazah": null
     *       }
     *   ]
     */
    public function unlistRegistran()
    {
        $registran = User::join('data_alumni', 'nomor_ijazah', '=','no_ijazah', 'left outer')
                        ->leftJoin('kota', 'users.kota1_id', '=', 'kota.id')
                        ->where('status', 1)
                        ->where('role_id', '=', 3)
                        ->select('users.id', 'users.username','users.nama_lengkap','users.status','users.no_hp','kota.nama_kota','users.photo_profile','no_ijazah')->get();

        $data = [];
        foreach($registran as $r){
            if(is_null($r->no_ijazah)){
                array_push($data, $r);
            }
        }

        return $data;
    }
    /**
     * @group Registrasi
     * confirm registran
     * untuk verifikasi pendaftar oleh admin, status 1 = diterima, status 2 = ignore
     * @bodyParam id int required
     * @bodyParam status int required
     * @response{
     * "status": "success/failed",
     * "message": "Confirm user Berhasil",
     * "data": "user"
     * }
     */
    public function confirmRegistran(Request $req)
    {
        $auth = Auth::user();

        if($auth->role_id == 1){
            
            $user = User::where('id', $req->id)->select('id','username','status','email','jurusan_id','bidang_id','tahun_masuk','tahun_lulus')->first();
            $user->status = $req->status;
            $user->akun_verified_by = $auth->username;
            $user->save();
            if($user->status == 2){
                dispatch(new ProcessConfirmed($user));
                activity()->causedBy($auth->id)->log('Berhasil konfirmasi registran');
                return response()->json([
                    'status' => 'success',
                    'message' => 'User berhasil di confirm',
                    'data' => $user
                ]);
            }else{
                return response()->json([
                    'status' => 'success',
                    'message' => 'User berhasil di ignore',
                    'data' => $user
                ]);
            }
        }else{
            return response()->json([
                'status' => 'failed',
                'message' => 'Anda tidak memiliki akses',
                'data' => []
            ]);
        }
    }

    /**
     * @group Admin
     * Update status akun psikolog
     * @authenticated
     * @urlParam id
     */
    public function updateStatusAkun($id)
    {
        $user = User::findOrFail($id);
        if(!is_null($user)){
            if($user->is_aktif == 0){
                $user->is_aktif = 1;
            }else{
                $user->is_aktif = 0;
            }
            if($user->save()){
                return response()->json([
                    'status'=>'success',
                    'message'=>'Berhasil mengubah status akun',
                    'data'=>$user
                ]);
            }
        }
    }

    /**
     * @group Registrasi
     * Ignore registran
     * @urlParam id
     */
    public function ignoreRegistran($id)
    {
        $result = DB::transaction(function()use($id){
            try{
                $model = User::findOrFail($id);
                if(!is_null($model)){
                    $model->status = 3;
                    dispatch(new IgnoredAccountJob($model));
                    if($model->save()){
                        DB::commit();
                        return response()->json([
                            'status'=>'success',
                            'message'=>'Berhasil ignore registran',
                            'data'=>$model
                        ]);
                    }else{
                        DB::rollBack();
                    }
                }
            }catch(Exception $e){
                DB::rollBack();
                return $e->getMessage();
            }
        });

        return $result;
    }
}
