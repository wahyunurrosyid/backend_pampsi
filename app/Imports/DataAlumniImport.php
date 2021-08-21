<?php

namespace App\Imports;

use App\Models\DataAlumni;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\Importable;

class DataAlumniImport implements ToModel, WithBatchInserts, WithStartRow, WithValidation
{
    use Importable;
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        $dataAlumni = new DataAlumni();
        $dataAlumni->no_ijazah = $row[0];
        $dataAlumni->nama = $row[1];
        $dataAlumni->tanggal_lahir = $row[2];
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
            'no_ijazah' => 'unique:data_alumni',
        ];
    }

    public function customValidationMessages(): array
    {
        return [
            'no_ijazah.unique' => 'No ijazah sudah tersedia',
        ];
    }
}
