<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriVacancies extends BaseModel
{
    protected $table = 'kategori_vacancies';
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
