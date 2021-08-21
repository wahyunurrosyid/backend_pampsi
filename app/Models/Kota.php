<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kota extends BaseModel
{
    protected $table = 'kota';

    public $timestamps = false;

    protected $fillable = ['id','provinsi_id', 'nama_kota', 'kode_kota'];

    //list rule validasi
    public function rules()
    {
        return [
            'provinsi_id' => 'required',
            'nama_kota' => 'required|unique:kota,nama_kota,'.$this->id,
            'kode_kota' => 'required|unique:kota,kode_kota,'.$this->id
        ];
    }

    //list label
    public function attributesLabel(){
        return [
            'id' => 'Id Kota',
            'provinsi_id' => 'Id Provinsi',
            'nama_kota' => 'Nama Kota',
            'kode_kota' => 'Kode Kota'
        ];
    }

    //relasi kota ke provinsi
    public function dataProvinsi()
    {
        return $this->belongsTo(Provinsi::class,'provinsi_id','id');
    }

    //relasi kota ke negara
    public function dataNegara()
    {
        return $this->belongsTo(Provinsi::class,'provinsi_id')->join('negara','negara.id','=','provinsi.negara_id');
    }
}
