<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Traits\ApiResource;

class ForumResource extends JsonResource
{
    use ApiResource;

    public $allowedIncludes = [
        'dataComment',
        'dataUser',
        'likers',
    ];

    public $model = 'forum';

    public $attributes = [
        'id',
        'nama_kategori',
        'judul',
        'isi',
        'image',
        'user_id',
        'views',
        'alasan',
        'status',
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
            $this->showIncludes($request),
        ];
    }
    /* 
    * data relasi dari universitas
    */
    protected function relationships($request)
    {
        $return = [];

        $includes = $this->requestedIncludes($request);

        if ($includes->contains('dataComment')) {
            $return[] = [
                'comments' => [
                    'data' => $this->dataComment->map(function ($comments) use ($includes) {
                        return [
                            'id' => $comments->id,
                            'user_id' => $comments->user_id,
                            'content' => $comments->content,
                            'forum_id' => $comments->forum_id,
                            'created_at' => $comments->created_at,
                            'updated_at' => $comments->updated_at,
                        ];
                    }), 
                ],
            ];
        }

        if ($includes->contains('dataUser')) {
            $return[] = [
                'user' => [
                    'data' => $this->dataUser
                ],
            ];
        }

        if ($includes->contains('likers')) {
            $return[] = [
                'like' => [
                    'data' => count($this->likers)
                ],
            ];
        }

        return $return;
    }
}
