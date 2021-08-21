<?php

namespace App\Models;

use Illuminate\Support\Facades\Validator;

class Universitas extends BaseModel
{
    protected $table = 'universitas';

    protected $fillable = ['nama'];

    //list rule validasi
    public function rules(){
        return [
            'nama' => 'required|unique:universitas,nama,'.$this->id,
        ];
    }

    //list label
    public function attributesLabel(){
        return [
            'nama'=>'Nama Universitas'
        ];
    }

    //relasi ke jurusan
    public function dataJurusan(){
        return $this->hasMany(Jurusan::class,'universitas_id','id');
    }
}
