<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Negara extends BaseModel
{
    protected $table = 'negara';

    public $timestamps = false;

    protected $fillable = ['id','nama_negara','kode_negara'];

    //list rule validasi
    public function rules()
    {
        return [
            'nama_negara' => 'required|unique:negara,nama_negara,'.$this->id,
            'kode_negara' => 'required|unique:negara,kode_negara,'.$this->id
        ];
    }

    //list label
    public function attributesLabel(){
        return [
            'id' => 'Id Negara',
            'nama_negara' => 'Nama Negara',
            'kode_negara' => 'Kode Negara'
        ];
    }

    //relasi ke user
    public function dataProvinsi()
    {
        return $this->hasMany(Provinsi::class,'negara_id');
    }
}
