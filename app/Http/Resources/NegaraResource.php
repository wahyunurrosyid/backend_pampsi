<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Traits\ApiResource;

class NegaraResource extends JsonResource
{
    use ApiResource;

    public $allowedIncludes = [
        
    ];

    public $model = 'negara';

    public $attributes = [
        'id',
        'nama_negara',
        'kode_negara'
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
