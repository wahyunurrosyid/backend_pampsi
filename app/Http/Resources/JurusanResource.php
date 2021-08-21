<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Traits\ApiResource;

class JurusanResource extends JsonResource
{
    use ApiResource;

    public $allowedIncludes = [
        'dataUniversitas'
    ];

    public $model = 'jurusan';

    public $attributes = [
        'id',
        'universitas_id',
        'nama',
        'kode'
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
    * data relasi dari jurusan
    */
    protected function relationships($request)
    {
        $return = [];

        $includes = $this->requestedIncludes($request);

        //relasi has one
        if ($includes->contains('dataUniversitas')) {
            $return[] = [
                'universitas' => [
                    'data' => [
                        'nama' => $this->dataUniversitas->nama,
                    ],
                ],
            ];
        }
        return $return;
    }
}
