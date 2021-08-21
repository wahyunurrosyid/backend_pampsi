<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SurveySoal extends BaseModel
{
    protected $table = 'survey_soal';
    protected $fillable = ['survey_id','soal','pilihan','tipe'];

    public function rules()
    {
        return [];
    }

    public function attributesLabel()
    {
        return [];
    }

    public function getPilihanAttribute($value)
    {
        if(@$value){
            return json_decode($value);
        }else{
            return [];
        }
    }
}
