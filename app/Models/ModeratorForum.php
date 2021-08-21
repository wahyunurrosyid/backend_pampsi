<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModeratorForum extends BaseModel
{
    protected $table = 'moderator_forum';
    protected $fillable = ['user_id','kategori_id'];

    //list rule validasi
    public function rules(){
        return [
            'user_id'=>'integer',
            'kategori_id'=>'string'
        ];
    }

    //list label
    public function attributesLabel(){
        return [
            'user_id'=>'Id User',
            'kategori_id'=>'Id Kategori'
        ];
    }

    public function dataUser()
    {
        return $this->belongsTo(User::class,'user_id','id')->select('users.id','username','nama_lengkap','email','photo_profile');
    }
}
