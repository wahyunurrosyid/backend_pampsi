<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Survey extends BaseModel
{
    protected $table = 'survey';
    protected $fillable = ['user_id','kategori','close','judul','keterangan','file_panduan','visible','status_survey'];
    public $incrementing = false;
    public $objFile;

    public function rules(){
        return [
            // 'objFile'=>'sometimes|file',
            // 'file_panduan'=>'sometimes|string'
        ];
    }

    public function attributesLabel(){
        return [
            'objFile'=>'File'
        ];
    }

    public function dataUser()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function dataSoal()
    {
        return $this->hasMany(SurveySoal::class,'survey_id','id');
    }

    public function dataJawaban()
    {
        return $this->hasMany(SurveyJawaban::class,'survey_id','id');
    }

    public function dataResponden($per_page=10)
    {
        return SurveyJawaban::select('nama','email','jawaban','created_at')->paginate($per_page);
    }

    public function getStatusAttribute()
    {
        $auth = Auth::user();
        if(@$auth){
            $jawaban = SurveyJawaban::where(['survey_id'=>$this->id,'email'=>$auth->email])->first();
            if(!is_null($jawaban)){
                return 1;
            }else{
                return 0;
            }
        }else{
            return 2;
        }
    }
}
