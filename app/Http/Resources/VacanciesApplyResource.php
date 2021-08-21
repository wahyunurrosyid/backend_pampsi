<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Traits\ApiResource;

class VacanciesApplyResource extends JsonResource
{
    use ApiResource;

    public $allowedIncludes = [
        //
    ];

    public $model = 'vacancies_apply';

    public $attributes = [
        'id','vacancies_id','user_id','status','created_at','updated_at',
        'username','email','nama_lengkap','member_id','tempat_lahir','tanggal_lahir','nomor_ijazah'
        ,'tahun_masuk','tahun_lulus','no_sipp','skill_kompetensi','profile_singkat','jenis_kelamin','photo_profile','agama','layanan',
        'perusahaan','nama_kategori','logo','judul'
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

        return $return;
    }
}
