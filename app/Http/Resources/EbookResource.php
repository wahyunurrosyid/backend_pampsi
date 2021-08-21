<?php

namespace App\Http\Resources;

use App\Models\Ebook;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Traits\ApiResource;
use Illuminate\Support\Facades\Auth;

class EbookResource extends JsonResource
{
    use ApiResource;

    public $allowedIncludes = [
        'likers'
    ];

    public $model = 'ebook';

    public $attributes = [
        'id','user_id','judul','author','synopsis','visible','bidang_id','file','image','created_at','nama','nama_lengkap','email','photo_profile'
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

        $user = Auth::user();
        if($user){
            $isLike = $user->hasLiked(Ebook::find($this->id));
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
