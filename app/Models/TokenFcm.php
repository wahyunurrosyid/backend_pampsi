<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TokenFcm extends Model
{
    protected $table = 'token_fcm';
    protected $fillable = ['user_id','token'];
}
