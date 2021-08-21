<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Likeable;
class Artikel extends BaseModel
{
    use Likeable;
    protected $table = 'artikel';
    protected $fillable = ['nama_kategori','judul','isi','image','user_id','views','visible'];
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
            'nama_kategori'=>'Nama Kategori',
            'judul'=>'Judul',
            'isi'=>'Isi',
            'image'=>'Image',
            'views'=>'Views'
        ];
    }

    //relasi ke user
    public function dataUser()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
