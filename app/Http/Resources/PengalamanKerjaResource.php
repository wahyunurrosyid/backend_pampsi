<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PengalamanKerjaResource extends JsonResource
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
            'namaPerusahaan'=>$this->nama_perusahaan,
            'posisiJabatan'=>$this->posisi_jabatan,
            'periode'=>$this->periode,
            'keterangan'=>$this->keterangan
        ];
    }
}
