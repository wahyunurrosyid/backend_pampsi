<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PengalamanKerja extends Model
{

    protected $table = 'pengalaman_kerja';

    protected $fillable = [
        'user_id','nama_perusahaan','posisi_jabatan','periode','keterangan'
    ];

}
