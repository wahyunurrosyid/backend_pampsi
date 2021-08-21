<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Friendship extends Model
{
    CONST PENDING = 'pending';
    CONST CONFIRMED = 'confirmed';
    CONST BLOCKED = 'blocked';

    public $fillable = ['first_user', 'second_user', 'status', 'acted_user'];
    
}
