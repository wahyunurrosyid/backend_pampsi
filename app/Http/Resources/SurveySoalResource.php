<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Traits\ApiResource;

class SurveySoalResource extends JsonResource
{
    use ApiResource;

    public $allowedIncludes = [

    ];

    public $model = 'survey_soal';

    public $attributes = [
        'id',
        'survey_id',
        'soal',
        'pilihan',
        'tipe'
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
