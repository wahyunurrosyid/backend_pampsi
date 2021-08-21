<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Traits\ApiResource;

class UserResource extends JsonResource
{
    use ApiResource;

    public $allowedIncludes = [
        'dataKota1',
        'dataKota2',
        'dataBidang',
        'dataModerator',
        'dataUniversitas',
        'dataJurusan',
        'dataArtikel',
        'dataEbook'
    ];

    public $model = 'users';

    public $attributes = [
        'id',
        'nama_lengkap',
        'username',
        'email',
        'tempat_lahir',
        'tanggal_lahir',
        'kota1_id',
        'kota2_id',
        'no_hp',
        'universitas_id',
        'jurusan_id',
        'bidang_id',
        'tahun_masuk',
        'tahun_lulus',
        'nomor_ijazah',
        'no_sipp',
        'skill_kompetensi',
        'profile_singkat',
        'jenis_kelamin',
        'photo_profile',
        'agama',
        'layanan',
        'umur',
        'role_id',
        'status',
        'biro',
        'last_login'
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

    /* 
    * data relasi dari user
    */
    protected function relationships($request)
    {
        $return = [];

        $includes = $this->requestedIncludes($request);

        //relasi belongsTo
        if ($includes->contains('dataKota1')) {
            $return[] = [
                'kota1' => [
                    'data' => $this->dataKota1,
                    'relasi_provinsi' => $this->dataKota1->dataProvinsi,
                    'relasi_negara' => $this->dataKota1->dataNegara
                ],
            ];
        }

        if ($includes->contains('dataKota2')) {
            if(!is_null($this->kota2_id)){
                $return[] = [
                    'kota2' => [
                        'data' => $this->dataKota2,
                        'relasi_provinsi' => $this->dataKota2->dataProvinsi,
                        'relasi_negara' => $this->dataKota2->dataNegara
                    ],
                ];
            }else{
                $return[] = [
                    'kota2' => [
                        'data' => null
                    ]
                ];
            }
        }

        if ($includes->contains('dataBidang')) {
            $return[] = [
                'bidang' => [
                    'data' => $this->dataBidang
                ],
            ];
        }

        if ($includes->contains('dataModerator')) {
            $return[] = [
                'moderator' => [
                    'data' => $this->dataModerator->map(function ($moderator) use ($includes) {
                        return [
                            'id' => $moderator->id,
                            'user_id' => $moderator->user_id,
                            'nama_kategori' => $moderator->nama_kategori,
                        ];
                    }),
                ],
            ];
        }

        if ($includes->contains('dataUniversitas')) {
            $return[] = [
                'universitas' => [
                    'data' => $this->dataUniversitas
                ],
            ];
        }

        if ($includes->contains('dataJurusan')) {
            $return[] = [
                'jurusan' => [
                    'data' => $this->dataJurusan
                ],
            ];
        }

        if ($includes->contains('dataArtikel')) {
            $return[] = [
                'artikel' => [
                    'data' => $this->dataArtikel->map(function ($artikel) use ($includes) {
                        return [
                            'id' => $artikel->id,
                            'user_id' => $artikel->user_id,
                            'nama_kategori' => $artikel->nama_kategori,
                            'judul' => $artikel->judul,
                            'isi' => $artikel->isi,
                            'image' => $artikel->image,
                            'views' => $artikel->views,
                            'visible' => $artikel->visible
                        ];
                    }),
                ],
            ];
        }

        if ($includes->contains('dataEbook')) {
            $return[] = [
                'ebook' => [
                    'data' => $this->dataEbook->map(function ($ebook) use ($includes) {
                        return [
                            'id' => $ebook->id,
                            'user_id' => $ebook->user_id,
                            'bidang_id' => $ebook->bidang_id,
                            'judul' => $ebook->judul,
                            'isi' => $ebook->isi,
                            'image' => $ebook->image,
                            'views' => $ebook->views,
                            'visible' => $ebook->visible,
                            'relasi_bidang' => $ebook->dataBidang
                        ];
                    }),
                ],
            ];
        }

        return $return;
    }
}
