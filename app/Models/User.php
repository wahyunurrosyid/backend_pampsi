<?php

namespace App\Models;

use App\Notifications\ResetPassword;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Laravel\Lumen\Auth\Authorizable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Observers\UserObserver;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\DB;
use App\Traits\FriendConnection; //sistem friendship
use App\Traits\Liker;
use Carbon\Carbon;

class User extends BaseModel implements AuthenticatableContract, AuthorizableContract, JWTSubject, CanResetPasswordContract
{
    use Authenticatable, Authorizable, Notifiable, UserObserver, CanResetPassword,HasRoles,FriendConnection,Liker;

    
    CONST LENGTH_PAD = 3; //panjang pad running number member
    CONST STRING_PAD = '0'; //karakter yang digunakan untuk pad number
    CONST START_NUMBER = 10; //start nomor member 

    CONST UNVERIFIED_EMAIL = 0; //baru register akun
    CONST DATA_FULFILLED = 1; //data alumni sudah lengkap
    CONST VERIFIED_BY_ADMIN = 2; //data alumni sudah diverifikasi admin
    CONST IGNORED_BY_ADMIN = 3; //data alumni sudah diignore admin

    protected $table = 'users';

    public $password_no_hash;
    public $objPhoto;
   

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username','email','password','email_verified_at','role_id','status','api_token','remember_token','nama_lengkap','member_id','tempat_lahir','tanggal_lahir','kota1_id','kota2_id','no_hp','universitas_id','jurusan_id','tahun_masuk','tahun_lulus','nomor_ijazah','no_sipp','skill_kompetensi','profile_singkat','longitude','latitude','jenis_kelamin','photo_profile','akun_verified_at','akun_verified_by','bidang_id','agama','layanan', 'biro', 'last_login'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password','remember_token','api_token'
    ];

    //list rule validasi
    public function rules(){
    }

    //list label
    public function attributesLabel(){
    }

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

    //generate nomor urut member
    public function generateMemberID(){
        //get nomor sequence
        //$number = DB::table('member_sequence')->where('id',1)->increment('nomor');
        $number = DB::table('member_sequence')->insertGetId(['id'=>null]);
        //running number dengan pad left
        $padNumber = str_pad($number,self::LENGTH_PAD,self::STRING_PAD,STR_PAD_LEFT);
        //ambil 2 digit terakhir dari tahun angkatan
        $angkatan = !is_null($this->tahun_masuk)?substr($this->tahun_masuk, -2):"00";
        //kode jurusan
        $major = $this->jurusan_id;
        return $this->member_id = $angkatan."/".$major."/".$padNumber;
    }

    //relasi ke universitas
    public function dataUniversitas()
    {
        return $this->belongsTo(Universitas::class,'universitas_id','id');
    }

    //relasi ke jurusan
    public function dataJurusan()
    {
        return $this->belongsTo(Jurusan::class,'jurusan_id','id');
    }

    //relasi ke kota1
    public function dataKota1()
    {
        return $this->belongsTo(Kota::class,'kota1_id','id');
    }

    //relasi ke kota2
    public function dataKota2()
    {
        return $this->belongsTo(Kota::class,'kota2_id','id');
    }

    //relasi ke bidang
    public function dataBidang()
    {
        return $this->belongsTo(Bidang::class,'bidang_id','id');
    }

    //relasi ke moderator forum
    public function dataModerator()
    {
        return $this->hasMany(ModeratorForum::class, 'user_id', 'id');
    }

    //relasi ke artikel
    public function dataArtikel()
    {
        return $this->hasMany(Artikel::class, 'user_id', 'id');
    }

    //relasi ke ebook
    public function dataEbook()
    {
        return $this->hasMany(Ebook::class, 'user_id', 'id');
    }

    //relasi ke pengalaman_kerja
    public function dataPengalamanKerja()
    {
        return $this->hasMany(PengalamanKerja::class,'user_id','id');
    }

    //relasi ke histori pendidikan
    public function dataHistoriPendidikan()
    {
        return $this->hasMany(HistoriPendidikan::class,'user_id','id');
    }

    public function getSkillKompetensiAttribute($value)
    {
        if(@$value){
            return json_decode($value);
        }else{
            return [];
        }
    }

    public function getBiroAttribute($value)
    {
        if(@$value){
            return json_decode($value);
        }else{
            return [];
        }
    }

    public function getUmurAttribute()
    {
        return Carbon::parse($this->tanggal_lahir)->diffInYears(Carbon::now());
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }

    public function dataRekomendasi()
    {
        return $this->hasMany(Rekomendasi::class,'penerima_rekomendasi','id');
    }
}
