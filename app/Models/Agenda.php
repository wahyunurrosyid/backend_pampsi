<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agenda extends BaseModel
{
    protected $table = 'agenda';
    protected $fillable = ['nama_kategori','judul','deskripsi','lokasi','start_date','end_date','fasilitas','pemateri','poster'];
    public $objPoster;

    //list rule validasi
    public function rules()
    {
        return [
            'nama_kategori'=>'required|string',
            'judul'=>'required|string',
            'deskripsi'=>'sometimes',
            'lokasi'=>'required',
            'start_date'=>'required',
            'end_date'=>'required',
            'fasilitas'=>'sometimes',
            'pemateri'=>'sometimes',
            'objPoster'=>'sometimes|image',
            'poster'=>'sometimes|string'
        ];
    }

    //list label
    public function attributesLabel()
    {
        return [
            'nama_kategori'=>'Nama Kategori',
            'judul'=>'Judul',
            'deskripsi'=>'Deskripsi',
            'lokasi'=>'Lokasi',
            'start_date'=>'Tanggal Awal',
            'end_date'=>'Tanggal Akhir',
            'fasilitas'=>'Fasilitas',
            'pemateri'=>'Pemateri',
            'poster'=>'Poster'
        ];
    }
}
