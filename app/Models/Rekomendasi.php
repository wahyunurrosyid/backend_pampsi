<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rekomendasi extends BaseModel
{
    protected $table = 'rekomendasi';
    protected $fillable = ['penerima_rekomendasi','pemberi_rekomendasi','catatan'];

    //list rule validasi
    public function rules(){
        return [
            'penerima_rekomendasi' => 'required',
            'pemberi_rekomendasi' => 'integer',
            'catatan' => 'string',
        ];
    }

    //list label
    public function attributesLabel(){
        return [
            'penerima_rekomendasi'=>'Penerima rekomendasi',
            'pemberi_rekomendasi'=>'Pemberi rekomendasi',
            'catatan'=>'Catatan'
        ];
    }

    public function dataPenerima()
    {
        return $this->belongsTo(User::class,'penerima_rekomendasi','id');
    }

    public function dataPemberi()
    {
        return $this->belongsTo(User::class,'pemberi_rekomendasi','id');
    }
}
