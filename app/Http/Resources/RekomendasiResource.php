<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RekomendasiResource extends JsonResource
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
            'penerimaRekomendasi'=>$this->penerima_rekomendasi,
            'pemberiRekomendasi'=>$this->pemberi_rekomendasi,
            'catatan'=>$this->catatan
        ];
    }
}
