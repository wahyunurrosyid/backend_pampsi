<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AgendaDokumentasi extends BaseModel
{
    protected $table = 'agenda_dokumentasi';
    protected $fillable = ['agenda_id','file'];
    public $objFile;

    public function rules()
    {
        return [
            'objFile'=>'sometimes|image'
        ];
    }

    public function attributesLabel()
    {
        return [
            'objFile'=>'File'
        ];
    }
}
