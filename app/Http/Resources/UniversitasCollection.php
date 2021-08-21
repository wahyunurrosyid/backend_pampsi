<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class UniversitasCollection extends ResourceCollection
{
    public $collects = 'App\Http\Resources\UniversitasResource';
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }

    /* public function with($request)
    {
        return [
            'meta' => [
                'key' => 'value',
            ],
        ];
    } */
}
