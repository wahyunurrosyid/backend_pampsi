<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Traits\ApiResource;

class KategoriVacanciesResource extends JsonResource
{
    use ApiResource;

    public $allowedIncludes = [
        
    ];

    public $model = 'kategori_vacancies';

    public $attributes = [
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
            $this->showFields($request)
        ];
    }
}
