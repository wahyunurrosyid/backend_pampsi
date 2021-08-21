<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Likeable;

class Ebook extends BaseModel
{
    use Likeable;
    protected $table = 'ebook';
    protected $fillable = ['user_id','judul','author','synopsis','visible','bidang_id','file','image'];
    public $objFile;
    public $objImage;

    //list rule validasi
    public function rules()
    {
        return [
            'judul'=>'string',
            'author'=>'string',
            'synopsis'=>'string',
            'bidang_id'=>'integer',
            'objFile'=>'mimes:pdf',
            'objImage'=>'image',
            'file'=>'nullable|string',
            'image'=>'nullable|string'
        ];
    }

    //list label
    public function attributesLabel()
    {
        return [
            'judul'=>'Judul',
            'author'=>'Author',
            'synopsis'=>'Synopsis',
            'bidang_id'=>'Id Bidang',
            'objFile'=>'Obj File',
            'objImage'=>'Obj Image',
            'file'=>'File',
            'image'=>'Image'
        ];
    }

    //relasi ke bidang
    public function dataBidang()
    {
        return $this->belongsTo(Bidang::class, 'bidang_id', 'id');
    }
}
