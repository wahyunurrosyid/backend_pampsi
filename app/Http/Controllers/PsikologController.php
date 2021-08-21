<?php

namespace App\Http\Controllers;

use App\Exceptions\DataNotFound;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedFilter;
use App\Models\User;
use App\Http\Resources\UserCollection;
use App\Models\Friendship;
use App\Spatie\PsikologFilter;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

/**
 * @group Psikolog
 * @authenticated
 */
class PsikologController extends Controller
{
    /**
     * My Profile
     * untuk melihan profile sendiri
     * @queryParam include string get data relasi (dataKota1,dataKota2,dataBidang,dataModerator,dataUniversitas,
     * dataJurusan,dataArtikel,dataEbook).
     */
    public function myProfile()
    {
        $auth = Auth::user();
        $where = User::where('id', $auth->id);
        $psikolog = QueryBuilder::for($where)
            ->allowedSorts(['kota1_id', 'kota2_id', 'bidang_id', 'nama_lengkap'])
            ->allowedFilters(['kota1_id', 'kota2_id', 'bidang_id', 'nama_lengkap', AllowedFilter::exact('id')])
            ->jsonPaginate()->appends(Request()->input());
        return new UserCollection($psikolog);
    }
    /**
     * @group Public API
     * List Psikolog
     * untuk list psikolog
     * @unauthenticated
     * @queryParam fields[users] string select kolom 'kota1_id','kota2_id','bidang_id'
     * @queryParam filter[nama_lengkap] string Filter by nama lengkap.
     * @queryParam filter[kota1_id] string Filter by kota 1. 
     * @queryParam filter[kota2_id] string Filter by kota 2. 
     * @queryParam filter[bidang_id] string Filter by bidang id. 
     * @queryParam filter[universitas_id] string Filter by universitas id. 
     * @queryParam sort string sort data berdasarkan kolom. tambah tanda (-) untuk DESC.
     * @queryParam page[number] integer optional
     * @queryParam page[size] integer oprional
     * @queryParam include string get data relasi (dataKota1,dataKota2,dataBidang,dataModerator). 
     * @queryParam page[number] integer optional
     * @queryParam page[size] integer oprional 
     * @queryParam umur1 integer optional
     * @queryParam umur2 integer optional
     * @responseFile storage/responses/psikolog.json
     */
    public function generalListPsikolog(Request $req)
    {
        if ($req->umur1 and $req->umur2) {
            $where = User::where(['role_id' => 3, 'is_aktif' => 1, 'status' => 2])->whereBetween(DB::raw('TIMESTAMPDIFF(YEAR,users.tanggal_lahir,CURDATE())'), array($req->umur1, $req->umur2));
        } else {
            $where = User::where(['role_id' => 3, 'is_aktif' => 1, 'status' => 2]);
        }
        $psikolog = QueryBuilder::for($where)
            ->allowedSorts(['kota1_id', 'kota2_id', 'bidang_id', 'nama_lengkap', 'universitas_id', 'agama', 'layanan', 'jenis_kelamin'])
            ->allowedFilters(AllowedFilter::custom('users', new PsikologFilter("all")),'bidang_id','kota1_id', 'kota2_id', 'bidang_id', 'nama_lengkap', 'universitas_id', 'agama', 'layanan', 'jenis_kelamin')
            ->jsonPaginate()->appends(Request()->input());

        return new UserCollection($psikolog);
    }

    /**
     * List Psikolog
     * untuk list psikolog di halaman admin
     * @queryParam fields[users] string select kolom 'kota1_id','kota2_id','bidang_id'
     * @queryParam filter[username] string Filter by username.
     * @queryParam filter[nama_lengkap] string Filter by nama lengkap.
     * @queryParam filter[kota1_id] string Filter by kota 1. 
     * @queryParam filter[kota2_id] string Filter by kota 2. 
     * @queryParam filter[bidang_id] string Filter by bidang id. 
     * @queryParam filter[universitas_id] string Filter by universitas id. 
     * @queryParam sort string sort data berdasarkan kolom. tambah tanda (-) untuk DESC.
     * @queryParam page[number] integer optional
     * @queryParam page[size] integer oprional 
     * @responseFile storage/responses/psikolog.json
     */
    public function listPsikolog($type,$value)
    {
        if($type=='jenis_kelamin'){
            if($value=='laki-laki'){
                $where = User::where('jenis_kelamin','Laki-laki');
            }else{
                $where = User::where('jenis_kelamin','Perempuan');
            }
        }elseif($type=='bidang'){
            $where = User::where('bidang_id',$value);
        }elseif($type=='provinsi'){
            $where = User::join('kota','kota.id','=','users.kota1_id')
                        ->where('kota.provinsi_id',$value);
        }else{
            $where = User::class;
        }
        $psikolog = QueryBuilder::for($where)
            ->allowedSorts(['kota1_id', 'kota2_id', 'bidang_id', 'nama_lengkap', 'username', 'is_aktif', 'universitas_id', 'agama', 'layanan', 'jenis_kelamin'])
            ->allowedFilters(AllowedFilter::custom('users', new PsikologFilter($type,$value)),'bidang_id','nama_lengkap')
            ->jsonPaginate()->appends(Request()->input());
        return new UserCollection($psikolog);
    }

    /**
     * view psikolog
     * untuk view psikolog
     * @urlParam id int required id user
     * @response{
     * "data":"data"
     * }
     */
    public function viewUser($id)
    {
        $user = User::find(Auth::user()->id);
        $target = User::where('id', $id)->with(['dataBidang', 'dataUniversitas', 'dataJurusan', 'dataKota1.dataProvinsi', 'dataKota2.dataProvinsi', 'dataModerator', 'dataArtikel', 'dataEbook', 'dataPengalamanKerja', 'dataHistoriPendidikan'])->first();
        if (@$user) {
            if ($user->isPending($target) == true)
                return $data = [
                    'status' => 'pending',
                    'data' => $target
                ];

            if ($user->isFriend($target) == true)
                return $data = [
                    'status' => 'confirmed',
                    'data' => $target
                ];

            if ($user->isBlocked($target) == true)
                return response()->json('Data not found', 404);

            return $data = [
                'status' => 'not_friend',
                'data' => $target
            ];
        }

        return $data = [
            'status' => 'success',
            'data' => $target
        ];
    }
    /**
     * @group Public API
     * view psikolog Public
     * untuk view psikolog
     * @unauthorize
     * @urlParam id int required id user
     * @response{
     * "data":"data"
     * }
     */
    public function viewUserPublic($id)
    {
        $target = User::where('id', $id)->with(['dataBidang', 'dataUniversitas', 'dataJurusan', 'dataKota1.dataProvinsi', 'dataKota2.dataProvinsi', 'dataModerator', 'dataArtikel', 'dataEbook', 'dataPengalamanKerja', 'dataHistoriPendidikan','dataRekomendasi'])->first();
        return [
            'status' => 'success',
            'data' => $target
        ];
    }
    /**
     * @group Public API
     * view psikolog Public by username
     * untuk view psikolog by username
     * @unauthorize
     * @urlParam id int required username user
     * @response{
     * "data":"data"
     * }
     */
    public function viewUserPublicUsername($username)
    {
        $name = $username;
        if(str_contains($name,'-')){
            $explode = explode('-',$name);
            $implode = implode('/',$explode);
            $name = $implode;
        }
        $target = User::where('username', $name)->with(['dataBidang', 'dataUniversitas', 'dataJurusan', 'dataKota1.dataProvinsi', 'dataKota2.dataProvinsi', 'dataModerator', 'dataArtikel', 'dataEbook', 'dataPengalamanKerja', 'dataHistoriPendidikan','dataRekomendasi'])->first();
        return [
            'status'=>'success',
            'data'=>$target
        ];
    }
    /**
     * view psikolog username
     * untuk view psikolog username
     * @urlParam username string required
     * @response{
     * "data":"data"
     * }
     */
    public function viewUserUsername($username)
    {
        $name = $username;
        if(str_contains($name,'-')){
            $explode = explode('-',$name);
            $implode = implode('/',$explode);
            $name = $implode;
        }    
        if (@Auth::user()->id) {
            $user = User::find(Auth::user()->id);
            $target = User::where('username', $name)->with(['dataBidang', 'dataUniversitas', 'dataJurusan', 'dataKota1.dataProvinsi', 'dataKota2.dataProvinsi', 'dataModerator', 'dataArtikel', 'dataEbook', 'dataPengalamanKerja', 'dataHistoriPendidikan'])->first();
            
            if ($user->isPending($target) == true)
                return $data = [
                    'status' => 'pending',
                    'data' => $target
                ];

            if ($user->isFriend($target) == true)
            return $data = [
                    'status' => 'confirmed',
                    'data' => $target
                ];
                
                if ($user->isBlocked($target) == true)
                return response()->json('Data not found', 404);
                
                return $data = [
                    'status' => 'not_friend',
                    'data' => $target
                ];
        }
        
        $target = User::where('username', $name)->with(['dataBidang', 'dataUniversitas', 'dataJurusan', 'dataKota1.dataProvinsi', 'dataKota2.dataProvinsi', 'dataModerator', 'dataArtikel', 'dataEbook', 'dataPengalamanKerja', 'dataHistoriPendidikan'])->first();
        return $data = [
            'status'=>'not_friend',
            'data'=>$target
        ];
    }
    /**
     * photo profile
     * untuk upload foto profil
     * @urlParam id int required id user
     * @bodyParam objPhoto file required
     * @response{
     * "status":"succes",
     * "message":"Berhasil upload photo profil",
     * "data":"data"
     * }
     */
    public function photoProfile(Request $req)
    {
        if (!is_null($req->id)) {

            $rule = [
                'objPhoto' => 'required',
                'photo_profile' => 'string'
            ];

            $msgValidation = [
                'mimes' => ':attributes harus gambar',
                'max' => ':attributes max 1mb',
            ];

            $this->validate($req, $rule, $msgValidation);

            //delete foto lama
            $user = User::where('id', $req->id)->first();
            File::delete("upload/photo_profile/$req->id/$user->photo_profile");

            if(!is_dir(base_path('public/upload/photo_profile/'.$req->id))){
                File::makeDirectory(base_path('public/upload/photo_profile/'.$req->id));
            }

            if(strpos($req->objPhoto,"base64") == true){
                $extension = explode('/', mime_content_type($req->objPhoto))[1];
                if(strpos($req->objPhoto,"data:jpeg")){
                    $extension = 'jpeg';
                }
                if(strpos($req->objPhoto,"data:png")){
                    $extension = 'png';
                }
                if(strpos($req->objPhoto,"data:jpg")){
                    $extension = 'jpg';
                }
                list($type, $req->objPhoto) = explode(';', $req->objPhoto);
                list(, $req->objPhoto)      = explode(',', $req->objPhoto);
                $dataPhoto = base64_decode($req->objPhoto);
                $filename = $req->id . '-' . time() . '.' . $extension;
                file_put_contents(base_path('public/upload/photo_profile/'.$req->id.'/'.$filename), $dataPhoto);
            }

            $user->photo_profile = $filename;
            $user->save();
            

            if ($user->save() == true) {
                return response()->json([
                    'status' => 'success',
                    'message' => 'Berhasil upload foto profil',
                    'data' => $user
                ]);
            } else {
                return response()->json([
                    'status' => 'failed',
                    'message' => 'Gagal upload foto profil',
                    'data' => []
                ]);
            }
        } else {
            return response()->json([
                'status' => 'failed',
                'message' => 'User tidak ditemukan',
                'data' => []
            ]);
        }
    }

    /**
     * update profile
     * untuk update semua profil psikolog
     * @urlParam id int required id user
     * @bodyParam email email
     * @bodyParam role_id int
     * @bodyParam status int
     * @bodyParam api_token string
     * @bodyParam remember_token string
     * @bodyParam nama_lengkap string
     * @bodyParam tempat_lahir string
     * @bodyParam kota1_id int
     * @bodyParam kota2_id int
     * @bodyParam no_hp int
     * @bodyParam jurusan_profesi string
     * @bodyParam tahun_masuk int
     * @bodyParam tahun_lulus int
     * @bodyParam nomor_ijazah string
     * @bodyParam no_sipp int
     * @bodyParam bidang_id int
     * @bodyParam skill_kompetensi string
     * @bodyParam profile_singkat string
     * @bodyParam longitude string
     * @bodyParam latitude string
     * @bodyParam jenis_kelamin string
     * @bodyParam photo_profile file
     * @bodyParam agama enum
     * @bodyParam layanan enum
     * 
     * @response{
     * "status":"success",
     * "message":"Berhasil update profile",
     * "data":"data"
     * }
     */
    public function profile(Request $req)
    {
        $rules = [
            'email' => 'sometimes|unique:users|email'
        ];

        $user = User::find($req->id);
        if ($user->email != $req->email) {
            $this->validate($req, $rules);
        }

        if (!is_null($user)) {
            //move gambar
            $image = $req->photo_ijazah;
            if(!is_null($image)){
                $ex = $image->getClientOriginalExtension();
                $imageName = time().".".$ex;
                $user->objIjazah=$req->photo_ijazah;
                $user->photo_ijazah=$imageName;
                if(!is_null($image)){
                    $image->move('upload/photo_ijazah/'.$user->id.'/', $imageName, 'local');
                }
            }
            $user->update($req->all());
            if(@$req->biro){
                $biro = json_encode($req->biro);
                $user->biro = $biro;
            }
            $skill = json_encode($req->skill_kompetensi);
            $user->skill_kompetensi = $skill;
            if(!is_null($req->photo_ijazah)){
                $user->photo_ijazah=$imageName;
            }
            $user->save();
            return response()->json([
                'status' => 'success',
                'message' => 'Update profile berhasil',
                'data' => $user
            ], 200);
        } else {
            return response()->json([
                'status' => 'failed',
                'message' => 'User tidak ditemukan',
                'data' => $user
            ], 402);
        }
    }
    /**
     * Update Akun
     * untuk update akun
     * @urlParam id integer required
     */
    public function updateAkun(Request $req)
    {
        $auth = Auth::user();
        $rules = [
            'username' => 'sometimes|unique:users,username,'.$auth->id,
            'password' => 'string|min:8|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/|regex:/[@$!%*#?&]/'
        ];
        $this->validate($req, $rules);
        $user = User::find($auth->id);
        if (!is_null($req->username)) {
            if($req->username!=$auth->username){
                $user->username = $req->username;
            }
        }
        if (!is_null($req->password)) {
            $user->password = app('hash')->make($req->password);
        }
        if ($user->save() == true) {
            $user->save();
            return response()->json([
                'status' => 'success',
                'message' => 'Berhasil update akun',
                'data' => $user
            ]);
        } else {
            return response()->json([
                'status' => 'failed',
                'message' => 'Gagal update akun',
                'data' => []
            ]);
        }
    }

    /**
     * View General Psikolog
     * @group Public API
     * @unauthenticated
     * @urlParam id integer required
     */
    public function generalViewPsikolog($id)
    {
        $user = User::where('id', $id)->with(['dataBidang', 'dataUniversitas', 'dataJurusan', 'dataKota1.dataProvinsi', 'dataKota2.dataProvinsi', 'dataModerator', 'dataArtikel', 'dataEbook', 'dataPengalamanKerja', 'dataHistoriPendidikan'])->get();
        if (@$user) {
            return response()->json([
                'status' => 'success',
                'message' => 'Berhasil view psikolog',
                'data' => $user
            ]);
        }
    }

    /**
     * List Kolega
     * untuk list kolega
     * @queryParam fields[users] string select kolom 'kota1_id','kota2_id','bidang_id'
     * @queryParam filter[username] string Filter by username.
     * @queryParam filter[nama_lengkap] string Filter by nama lengkap.
     * @queryParam filter[kota1_id] string Filter by kota 1. 
     * @queryParam filter[kota2_id] string Filter by kota 2. 
     * @queryParam filter[bidang_id] string Filter by bidang id. 
     * @queryParam filter[universitas_id] string Filter by universitas id. 
     * @queryParam sort string sort data berdasarkan kolom. tambah tanda (-) untuk DESC.
     * @queryParam page[number] integer optional
     * @queryParam page[size] integer oprional 
     * @queryParam include string get data relasi (dataKota1,dataKota2,dataBidang,dataModerator,
     * dataUniversitas,dataJurusan,dataArtikel,dataEbook). 
     * @responseFile storage/responses/psikolog.json
     */
    public function listKolega()
    {
        $where = User::where(['role_id' => 3, 'status' => 2])->where('id', '!=', Auth::user()->id);
        $psikolog = QueryBuilder::for($where)
            ->allowedSorts(['kota1_id', 'kota2_id', 'bidang_id', 'nama_lengkap', 'username', 'is_aktif', 'universitas_id'])
            ->allowedFilters(['kota1_id', 'kota2_id', 'bidang_id', 'nama_lengkap', 'username', 'is_aktif', 'universitas_id', AllowedFilter::exact('id')])
            ->jsonPaginate()->appends(Request()->input());
        return new UserCollection($psikolog);
    }

    //find data
    public function findData($id)
    {
        $model = User::find($id);
        if (is_null($model)) {
            throw new DataNotFound();
        }
        return $model;
    }
}
