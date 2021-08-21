<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notifikasi extends Model
{
    protected $table = 'notifications';
    protected $fillable = ['id','type','notifiable_type','notifiable_id','data','read_at'];
}
