<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\BaseModel;

class VacanciesApply extends BaseModel
{
    protected $table = 'vacancies_apply';
    protected $fillable = ['vacancies_id','user_id'];

    public function rules(){
        return [];
    }

    public function attributesLabel(){
        return [];
    }

    public function dataVacancies()
    {
        return $this->belongsTo(Vacancies::class,'vacancies_id','id');
    }
}
