<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Traits\ApiResource;

class ProvinsiResource extends JsonResource
{
    use ApiResource;

    public $allowedIncludes = [
        
    ];

    public $model = 'provinsi';

    public $attributes = [
        'id',
        'negara_id',
        'nama_provinsi',
        'kode_provinsi'
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
            $this->showFields($request)
        ];
    }
}
