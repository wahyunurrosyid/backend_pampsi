<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HistoriPendidikanResource extends JsonResource
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
            'tingkat'=>$this->tingkat,
            'namaLembagaPendidikan'=>$this->nama_lembaga_pendidikan,
            'tahunLulus'=>$this->tahun_lulus
        ];
    }
}
