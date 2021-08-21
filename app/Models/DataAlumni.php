<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataAlumni extends Model
{

    protected $table = 'data_alumni';

    protected $fillable = [
        'no_ijazah', 'nama', 'tanggal_lahir'
    ];

}
