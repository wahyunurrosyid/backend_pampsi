<?php

namespace App\Models;

use App\Traits\Likeable;
use Illuminate\Database\Eloquent\Model;

class Forum extends BaseModel
{
    use Likeable;
    
    protected $table = 'forum';
    protected $fillable = ['nama_kategori','judul','isi','image','user_id','views','alasan'];
    public $objImage;

    //list rule validasi
    public function rules()
    {
        return [
            'nama_kategori'=>'required|string',
            'judul'=>'required|string',
            'isi'=>'required',
            'objImage'=>'sometimes|image',
            'image'=>'string',
            'views'=>'integer'
        ];
    }

    //list label
    public function attributesLabel()
    {
        return [
            'nama_kategori'=>'Kategori',
            'judul'=>'Judul',
            'isi'=>'Isi',
            'image'=>'Image',
            'views'=>'Views'
        ];
    }

    public function dataUser()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function dataComment()
    {
        return $this->hasMany(CommentForum::class,'forum_id','id')
                    ->join('users','comments_forum.user_id','=','users.id')
                    ->select('users.id','users.nama_lengkap','users.username','users.photo_profile','content',
                            'comments_forum.created_at','comments_forum.updated_at',
                            'comments_forum.id as idComment', 'comments_forum.forum_id')->orderBy('created_at','asc');
    }

    public function dataModerator()
    {
        return $this->hasMany(ModeratorForum::class,'nama_kategori','nama_kategori')
                    ->join('users','moderator_forum.user_id','=','users.id')
                    ->select('users.id','users.username','users.nama_lengkap','users.email');
    }
}
