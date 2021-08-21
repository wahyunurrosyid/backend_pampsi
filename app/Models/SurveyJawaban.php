<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Observers\JawabanObserver;

class SurveyJawaban extends BaseModel
{
    use JawabanObserver;

    protected $table = 'survey_jawaban';
    protected $fillable = ['nama','email','survey_id','jawaban'];

    public function rules(){
        return [
            'nama'=>'string',
            'email'=>'email',
            'survey_id'=>'string',
            'jawaban'=>'string'
        ];
    }

    public function attributesLabel(){
        return [
            'nama'=>'Nama',
            'email'=>'Email',
            'survery_id'=>'idSurvey',
            'jawaban'=>'Jawaban'
        ];
    }

    public function dataSurvey()
    {
        return $this->belongsTo(Survey::class,'survey_id','id')
                    ->join('users','survey.user_id','=','users.id')
                    ->select('users.id as idUser','users.username','users.email');
    }

    public function getJawabanAttribute($value)
    {
        if(@$value){
            $val = json_decode($value);
            $soal = SurveySoal::where('survey_id',$this->survey_id)->get();
            $res = [];
            foreach($val as $v){
                foreach($soal as $s){
                    if($v->id == $s['id']){
                        $res[]=[
                            'id'=>$v->id,
                            'soal'=>$s['soal'],
                            'pilihan'=>$s['pilihan'],
                            'jawaban'=>$v->answer
                        ];
                    }
                }
            }
            return $res;
        }else{
            return [];
        }
    }
}
