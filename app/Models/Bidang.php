<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bidang extends BaseModel
{
    protected $table = 'bidang';
    protected $fillable = ['nama'];

    //list rule validasi
    public function rules(){
        return [
            'nama' => 'required|unique:bidang,nama'
        ];
    }

    //list label
    public function attributesLabel(){
        return [
            'nama'=>'Nama Bidang',
        ];
    }

    public function dataUser()
    {
        return $this->hasMany(User::class, 'bidang_id');
    }
}
