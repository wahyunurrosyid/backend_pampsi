<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Traits\ApiResource;

class SurveyJawabanResource extends JsonResource
{
    use ApiResource;

    public $allowedIncludes = [

    ];

    public $model = 'survey_jawaban';

    public $attributes = [
        'id',
        'nama',
        'email',
        'survei_id',
        'jawaban'
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
