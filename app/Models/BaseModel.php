<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Validator;

abstract class BaseModel extends Model
{
    //list rule validasi
    abstract public function rules();

    //list label
    abstract public function attributesLabel();

    //custom pesan validasi error
    public function customValidationMessages(){
        return [];
    }

    //validasi input
    public function validate(){
        //get used rule
        return Validator::make($this->attributesToArray(),$this->rules(),$this->customValidationMessages(),$this->attributesLabel());
    }
}
