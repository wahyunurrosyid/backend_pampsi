<?php
/* 
* dendy dogol, jan 2021
*/
namespace App\Exceptions;

use Exception;

class DataNotFound extends Exception
{
    public function render()
    {
        return [
            'status'=>'failed',
            'message'=>'Data tidak ditemukan!'
        ];
    }
}