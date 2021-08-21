<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengalaman extends BaseModel
{
    protected $table = 'pengalaman';
    protected $fillable = ['portfolio','project_kategori','service_kategori','klien','klien_kategori','lokasi','member','role','start_date','end_date','deskripsi'];

    //list rule validasi
    public function rules(){
        return [
            'portfolio'=>'sometimes|string|max:30',
            'project_kategori'=>'sometimes|string|max:30',
            'service_kategori'=>'sometimes|string|max:30',
            'klien'=>'sometimes|string|max:30',
            'klien_kategori'=>'sometimes|string|max:30',
            'lokasi'=>'sometimes|string|max:255',
            'member'=>'sometimes|integer',
            'start_date'=>'sometimes|date',
            'end_date'=>'sometimes|date',
            'deskripsi'=>'sometimes|string|max:255'
        ];
    }

    //list label
    public function attributesLabel(){
        return [
            'portfolio'=>'Portfolio',
            'project_kategori'=>'Kategori Project',
            'service_kategori'=>'Kategori Service',
            'klien'=>'Klien',
            'klien_kategori'=>'Kategori Klien',
            'lokasi'=>'Lokasi',
            'member'=>'Member',
            'start_date'=>'Start Date',
            'end_date'=>'End Date',
            'deskripsi'=>'Deskripsi'
        ];
    }
}
