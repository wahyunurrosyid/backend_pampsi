<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Traits\ApiResource;

class AgendaResource extends JsonResource
{
    use ApiResource;

    public $allowedIncludes = [
    ];

    public $model = 'agenda';

    public $attributes = [
        'id',
        'nama_kategori',
        'judul',
        'deskripsi',
        'lokasi',
        'start_date',
        'end_date',
        'fasilitas',
        'pemateri',
        'poster'
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
