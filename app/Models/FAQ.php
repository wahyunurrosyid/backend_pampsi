<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FAQ extends BaseModel
{
    protected $table = 'faq';
    protected $fillable = ['pertanyaan','jawaban','created_by','updated_by'];

    //list rule validasi
    public function rules()
    {
        return [
            'pertanyaan'=>'required',
            'jawaban'=>'required'
        ];
    }

    //list label
    public function attributesLabel()
    {
        return [
            'pertanyaan'=>'Pertanyaan',
            'jawaban'=>'Jawaban'
        ];
    }
}
