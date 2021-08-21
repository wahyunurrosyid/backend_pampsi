<?php

namespace App\Imports;

use App\Models\DataAlumni;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\Importable;

class RegistrasiAkun implements ToModel, WithBatchInserts, WithStartRow, WithValidation
{
    use Importable;
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        $dataAlumni = new User;
        $dataAlumni->username = $row[0];
        $dataAlumni->nama_lengkap = $row[1];
        $dataAlumni->email = $row[2];
        $dataAlumni->password = app('hash')->make('Pampsi2021!');
        $dataAlumni->password_no_hash = 'Pampsi2021!';
        $dataAlumni->role_id = 3;
        $dataAlumni->kota1_id = 9472;
        $dataAlumni->kota2_id = 9472;
        $dataAlumni->email_verified_at = Carbon::now();
        $dataAlumni->status = 2;
        $dataAlumni->save();
    }

    public function batchSize(): int
    {
        return 1000;
    }

    public function startRow(): int
    {
        return 2;
    }

    public function rules(): array
    {
        return [
            'username' => 'unique:users',
        ];
    }

    public function customValidationMessages(): array
    {
        return [
            'username.unique' => 'Username sudah tersedia',
        ];
    }
}
