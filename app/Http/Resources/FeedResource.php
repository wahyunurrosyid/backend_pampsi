<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Traits\ApiResource;
use App\Models\Feed;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FeedResource extends JsonResource
{
    use ApiResource;

    public $allowedIncludes = [
        'dataUser',
        'comments',
        'likers'
    ];

    public $model = 'feeds';

    public $attributes = [
        'id',
        'user_id',
        'content',
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
        $owner = User::find($this->user_id);
        if(Auth::user()->isFriend($owner)||Auth::user()->id==$this->user_id){
            return [
                $this->showFields($request),
                $this->showIncludes($request),
            ];
        }
        return response()->json(['status'=>'not_friend']);
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

        if ($includes->contains('comments')) {
            $return[] = [
                'comments' => [
                    'data' => $this->comments
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
