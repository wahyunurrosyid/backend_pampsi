<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Likeable;

class Feed extends BaseModel
{
    use Likeable;
    
    protected $table = 'feeds';
    protected $fillable = ['user_id','content'];

    //list rule validasi
    public function rules()
    {
        return [
            'user_id'=>'required|integer',
            'content'=>'required|string'
        ];
    }

    //list label
    public function attributesLabel()
    {
        return [
            'user_id'=>'Id User',
            'content'=>'Konten'
        ];
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')
                    ->join('users','users.id','comments.user_id')
                    ->select('comments.id','user_id','content','commentable_type','commentable_id','comments.created_at','users.nama_lengkap','users.username','users.photo_profile');
    }

    public function dataUser()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
