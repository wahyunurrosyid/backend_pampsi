<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PortfolioResource extends JsonResource
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
            'idUser'=>$this->user_id,
            'layanan'=>$this->layanan,
            'kategori'=>$this->kategori,
            'klien'=>$this->klien,
            'start_date'=>$this->start_date,
            'end_date'=>$this->end_date,
            'type'=>$this->type,
            'location'=>$this->location,
            'deskripsi'=>$this->deskripsi,
            'position'=>$this->position
        ];
    }
}
