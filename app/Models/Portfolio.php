<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends BaseModel
{
    protected $table = 'portfolio';
    protected $fillable = ['user_id','layanan','kategori','klien','type','end_date','start_date','location','deskripsi','position'];

    //list rule validasi
    public function rules(){
        return [
            'layanan' => 'required',
            'kategori' => 'required',
            'klien' => 'required',
            'type'=>'required',
            'end_date'=>'required',
            'start_date'=>'required',
            'location'=>'required'
        ];
    }

    //list label
    public function attributesLabel(){
        return [
            'user_id'=>'idUser',
            'layanan'=>'layanan',
            'kategori'=>'kategori',
            'klien'=>'klien',
            'type'=>'tipe',
            'end_date'=>'tanggal akhir',
            'start_date'=>'tanggal awal',
            'location'=>'lokasi',
            'deskripsi'=>'deskripsi',
            'position'=>'position'
        ];
    }
}
