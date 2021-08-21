<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;

class UserExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::select('username','nama_lengkap','email')->where('role_id',3)->where('last_login','!=',null)->orWhere('photo_profile','!=',null)->get();
    }
}
