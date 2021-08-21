<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PengalamanResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'portfolio'=>$this->portfolio,
            'project_kategori'=>$this->project_kategori,
            'service_kategori'=>$this->service_kategori,
            'klien'=>$this->klien,
            'klien_kategori'=>$this->klien_kategori,
            'lokasi'=>$this->lokasi,
            'member'=>$this->member,
            'role'=>$this->role,
            'start_date'=>$this->start_date,
            'end_date'=>$this->end_date,
            'deskripsi'=>$this->deskripsi
        ];
    }
}
