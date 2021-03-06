<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FaqResource extends JsonResource
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
            'pertanyaan'=>$this->pertanyaan,
            'jawaban'=>$this->jawaban,
            'created_by'=>$this->created_by,
            'updated_by'=>$this->updated_by
        ];
    }
}
