<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Traits\ApiResource;

class KotaResource extends JsonResource
{
    use ApiResource;

    public $allowedIncludes = [
        
    ];

    public $model = 'kota';

    public $attributes = [
        'id',
        'provinsi_id',
        'nama_kota',
        'kode_kota'
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
