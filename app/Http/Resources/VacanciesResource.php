<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Traits\ApiResource;

class VacanciesResource extends JsonResource
{
    use ApiResource;

    public $allowedIncludes = [
        'dataKota'
    ];

    public $model = 'vacancies';

    public $attributes = [
        'id','perusahaan','judul','kota_id','nama_kategori','deskripsi','start_date','end_date','logo','created_at','user_id','status'
    ];
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            $this->showFields($request),
            $this->showIncludes($request)
        ];
    }

    protected function relationships($request)
    {
        $return = [];

        $includes = $this->requestedIncludes($request);

        //relasi belongsTo
        if ($includes->contains('dataKota')) {
            $return[] = [
                'kota1' => [
                    'data' => $this->dataKota,
                    'relasi_provinsi' => $this->dataKota->dataProvinsi,
                    'relasi_negara' => $this->dataKota->dataNegara
                ],
            ];
        }

        return $return;
    }
}
