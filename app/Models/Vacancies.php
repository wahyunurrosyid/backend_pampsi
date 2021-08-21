<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Vacancies extends BaseModel
{
    protected $table = 'vacancies';
    protected $fillable = ['perusahaan','judul','kota_id','nama_kategori','deskripsi','start_date','end_date','logo','user_id'];

    public $objLogo;

    public function rules()
    {
        return [
            'perusahaan'=>'string',
            'judul'=>'string',
            'kota_id'=>'integer',
            'nama_kategori'=>'string',
            'deskripsi'=>'string',
            'start_date'=>'date',
            'end_date'=>'date',
            'objLogo'=>'image'
        ];
    }

    public function attributesLabel()
    {
        return [
            'perusahaan'=>'Perusahaan',
            'judul'=>'Judul',
            'kota_id'=>'Kota',
            'nama_kategori'=>'Nama Kategori',
            'deskripsi'=>'Deskripsi',
            'start_date'=>'Start Date',
            'end_date'=>'Expire Date'
        ];
    }

    public function dataKota()
    {
        return $this->belongsTo(Kota::class,'kota_id','id');
    }

    public function getStatusAttribute()
    {
        $auth = Auth::user();
        if(@$auth){
            $vacanciesApply = VacanciesApply::where(['vacancies_id'=>$this->id,'user_id'=>$auth->id])->first();
            if(!is_null($vacanciesApply)){
                return 1;
            }else{
                return 0;
            }
        }
    }
}
