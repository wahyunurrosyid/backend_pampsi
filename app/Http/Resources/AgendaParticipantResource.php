<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Traits\ApiResource;

class AgendaParticipantResource extends JsonResource
{
    use ApiResource;

    public $allowedIncludes = [
        'dataUser',
        'dataAgenda'
    ];

    public $model = 'agenda_participant';

    public $attributes = [
        'id',
        'agenda_id',
        'user_id',
        'created_at'
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

        if ($includes->contains('dataAgenda')) {
            $return[] = [
                'agenda' => [
                    'data' => $this->dataAgenda
                ]
            ];
        }

        return $return;
    }
}
