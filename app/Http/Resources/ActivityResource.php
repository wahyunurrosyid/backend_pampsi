<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Traits\ApiResource;

class ActivityResource extends JsonResource
{
    use ApiResource;

    public $allowedIncludes = [
        'dataUser'
    ];

    public $model = 'activity';

    public $attributes = [
        'log_name','description','subject_type','subject_id','causer_type','causer_id','properties','created_at','updated_at'
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

        return $return;
    }
}
