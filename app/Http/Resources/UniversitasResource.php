<?php

namespace App\Http\Resources;

use Exception;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Traits\ApiResource; //untuk select field dan query param lainnya

class UniversitasResource extends JsonResource
{
    use ApiResource;

    public $allowedIncludes = [
        'dataJurusan',
    ];

    public $model = 'universitas';

    public $attributes = [
        'id',
        'nama'
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
            $this->showIncludes($request),
        ];
        //return parent::toArray($request);
    }

    /* 
    * data relasi dari universitas
    */
    protected function relationships($request)
    {
        $return = [];

        $includes = $this->requestedIncludes($request);

        //relasi has many
        if ($includes->contains('dataJurusan')) {
            $return[] = [
                'jurusan' => [
                    //looping manual
                    'data' => $this->dataJurusan->map(function ($jurusan) use ($includes) {
                        return [
                            'id' => $jurusan->id,
                            'nama' => $jurusan->nama,
                            'kode' => $jurusan->kode,
                        ];
                    }), 
                   
                    //looping menggunakan api collection
                    //'data' => new JurusanCollection($this->dataJurusan)
                ],
            ];
        }

        return $return;
    }

}
