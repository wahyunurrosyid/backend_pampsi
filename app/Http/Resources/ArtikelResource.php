<?php

namespace App\Http\Resources;

use App\Models\Artikel;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Traits\ApiResource;
use Illuminate\Support\Facades\Auth;

class ArtikelResource extends JsonResource
{
    use ApiResource;

    public $allowedIncludes = [
        'dataUser',
        'likers'
    ];

    public $model = 'artikel';

    public $attributes = [
        'id',
        'nama_kategori',
        'judul',
        'isi',
        'image',
        'user_id',
        'views',
        'visible',
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

    protected function relationships($request)
    {
        $return = [];

        $includes = $this->requestedIncludes($request);

        //relasi has many
        if ($includes->contains('dataUser')) {
            $return[] = [
                'user' => [
                    'data' => $this->dataUser
                ],
            ];
        }

        $user = Auth::user();
        if($user){
            $isLike = $user->hasLiked(Artikel::find($this->id));
        }else{
            $isLike = null;
        }

        if ($includes->contains('likers')) {
            $return[] = [
                'like' => [
                    'data' => count($this->likers),
                    'isLike' => $isLike
                ],
            ];
        }

        return $return;
    }
}
