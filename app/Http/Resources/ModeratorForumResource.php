<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Traits\ApiResource;

class ModeratorForumResource extends JsonResource
{
    use ApiResource;

    public $allowedIncludes = [
        'dataUser'
    ];

    public $model = 'moderator_forum';

    public $attributes = [
        'id',
        'user_id',
        'nama_kategori'
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
            $this->showIncludes($request)
        ];
    }

    protected function relationships($request)
    {
        $return = [];

        $includes = $this->requestedIncludes($request);

        if ($includes->contains('dataUser')) {
            $return[] = [
                'data' => $this->dataUser, 
            ];
        }

        return $return;
    }
}
