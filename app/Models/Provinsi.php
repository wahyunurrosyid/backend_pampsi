<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provinsi extends BaseModel
{
    protected $table = 'provinsi';

    public $timestamps = false;

    protected $fillable = ['id','negara_id','nama_provinsi','kode_provinsi'];

    //list rule validasi
    public function rules()
    {
        return [
            'negara_id' => 'required',
            'nama_provinsi' => 'required|unique:provinsi,nama_provinsi,'.$this->id,
            'kode_provinsi' => 'required|unique:provinsi,nama_provinsi,'.$this->id
        ];
    }

    //list label
    public function attributesLabel(){
        return [
            'id' => 'Id Provinsi',
            'negara_id' => 'Id Negara',
            'nama_provinsi' => 'Nama Provinsi',
            'kode_provinsi' => 'Kode Provinsi'
        ];
    }

    //relasi ke kota
    public function dataKota()
    {
        return $this->hasMany(Kota::class,'provinsi_id','id');
    }

    //relasi ke negara
    public function dataNegara()
    {
        return $this->belongsTo(Negara::class,'negara_id','id');
    }
}
