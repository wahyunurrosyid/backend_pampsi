<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends BaseModel
{
    protected $table = 'comments';
    protected $fillable = ['user_id','content','commentable_type','commentable_id'];

    public function commentable()
    {
        return $this->morphTo();
    }

    //list rule validasi
    public function rules()
    {
        return [
            'content'=>'string',
        ];
    }

    //list label
    public function attributesLabel()
    {
        return [
            'content'=>'Konten',
        ];
    }

    //relasi ke user
    public function dataUser()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
