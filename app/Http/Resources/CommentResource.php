<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Traits\ApiResource;

class CommentResource extends JsonResource
{
    use ApiResource;

    public $allowedIncludes = [
        'dataUser'
    ];

    public $model = 'comments';

    public $attributes = [
        'id',
        'user_id',
        'content',
        'commentable_type',
        'commentable_id',
        'created_at',
        'updated_at'
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
                'user' => [
                    'data' => $this->dataUser
                ],
            ];
        }

        return $return;
    }
}
