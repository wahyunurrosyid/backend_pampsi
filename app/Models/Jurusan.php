<?php

namespace App\Models;

class Jurusan extends BaseModel
{
    protected $table = 'jurusan';

    protected $fillable = ['kode','universitas_id','nama'];

    //list rule validasi
    public function rules(){
        return [
            'kode' => 'required|unique:jurusan,kode,'.$this->id,
            'universitas_id' => 'required|integer',
            'nama' => 'required|string',
        ];
    }

    //list label
    public function attributesLabel(){
        return [
            'kode'=>'Kode Jurusan',
            'universitas_id'=>'ID Universitas',
            'nama'=>'Nama jurusan'
        ];
    }

    //relasi ke universitas
    public function dataUniversitas(){
        return $this->belongsTo(Universitas::class,'universitas_id','id');
    }

    //relasi ke user
    public function dataUser()
    {
        return $this->hasMany(User::class,'jurusan_id');
    }
}
