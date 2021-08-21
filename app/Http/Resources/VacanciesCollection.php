<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class VacanciesCollection extends ResourceCollection
{
    public $collects = 'App\Http\Resources\VacanciesResource';
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
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
