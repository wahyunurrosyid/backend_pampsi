<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CommentForum extends BaseModel
{
    protected $table = 'comments_forum';
    protected $fillable = ['user_id','content','forum_id','file_comment'];
    protected $objFileContent;
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
