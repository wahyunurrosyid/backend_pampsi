<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriForum extends BaseModel
{
    protected $table = 'kategori_forum';
    protected $fillable = ['nama'];

    //list rule validasi
    public function rules()
    {
        return [
            'nama'=>'required|string'
        ];
    }

    //list label
    public function attributesLabel()
    {
        return [
            'nama'=>'Nama Kategori'
        ];
    }
}
