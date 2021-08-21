<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HistoriPendidikan extends Model
{

    protected $table = 'histori_pendidikan';

    protected $fillable = [
        'user_id','tingkat','nama_lembaga_pendidikan','tahun_lulus'
    ];

}
