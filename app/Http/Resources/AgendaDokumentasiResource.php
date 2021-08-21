<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Traits\ApiResource;

class AgendaDokumentasiResource extends JsonResource
{
    use ApiResource;

    public $allowedIncludes = [];

    public $model = 'agenda_dokumentasi';

    public $attributes = [
        'id',
        'agenda_id',
        'file',
        'judul',
        'start_date',
        'lokasi'
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
        ];
    }
}
