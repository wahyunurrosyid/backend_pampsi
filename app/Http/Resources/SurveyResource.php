<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Traits\ApiResource;

class SurveyResource extends JsonResource
{
    use ApiResource;

    public $allowedIncludes = [
        'dataUser',
        'dataSoal',
        'dataJawaban',
        'dataResponden'
    ];

    public $model = 'survey';

    public $attributes = [
        'id',
        'user_id',
        'kategori',
        'close',
        'judul',
        'keterangan',
        'file_panduan',
        'visible',
        'status',
        'status_survey',
        'visible'
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

        if ($includes->contains('dataUser')) {
            $return[] = [
                'user' => [
                    'data' => $this->dataUser
                ],
            ];
        }

        if ($includes->contains('dataSoal')) {
            $return[] = [
                'soal' => [
                    'data' => $this->dataSoal->map(function ($soal) use ($includes) {
                        // $pilihan = json_decode($soal->pilihan);
                        return [
                            'id' => $soal->id,
                            'survey_id'=> $soal->survey_id,
                            'soal' => $soal->soal,
                            'pilihan' => $soal->pilihan,
                            'tipe'=>$soal->tipe
                        ];
                    }), 
                ],
            ];
        }

        if ($includes->contains('dataJawaban')) {
            $return[] = [
                'jawaban' => [
                    'data' => $this->dataJawaban->map(function ($jawaban) use ($includes) {
                        return [
                            'id' => $jawaban->id,
                            'nama'=>$jawaban->nama,
                            'email'=>$jawaban->email,
                            'survey_id'=> $jawaban->survey_id,
                            'jawaban' => $jawaban->jawaban
                        ];
                    }),
                ],
            ];
        }

        if ($includes->contains('dataResponden')) {
            $return[] = [
                'responden' => [
                    'data' => $this->dataResponden->map(function ($responden) use ($includes) {
                        return [
                            'nama'=>$responden->username,
                            'jawaban_id'=>$responden->id,
                            'jawaban'=>$responden->jawaban
                        ];
                    }),
                ],
            ];
        }

        return $return;
    }
}
