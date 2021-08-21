<?php

namespace App\Http\Controllers;

use App\Exceptions\DataNotFound;
use App\Http\Resources\VacanciesApplyCollection;
use App\Models\Vacancies;
use App\Models\VacanciesApply;
use App\Spatie\ApplyerFilter;
use App\Spatie\VacanciesApplyFilter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

/**
 * @group Vacancies
 * @authenticated
 */
class VacanciesApplyController extends Controller
{
    /**
     * List applyer
     * @queryParam fields[vacancies_id] string select kolom.
     * @queryParam filter[users.username] string Filter by nama vacancies. 
     * @queryParam sort string sort data berdasarkan kolom. tambah tanda (-) untuk DESC.
     * @queryParam page[number] integer nomor halaman.
     * @queryParam page[size] integer jumlah item per halaman.
     */
    public function listApplyer()
    {
        $vacanciesApply = QueryBuilder::for(VacanciesApply::class)
            ->join('vacancies','vacancies.id','vacancies_apply.vacancies_id')
            ->join('users','users.id','vacancies_apply.user_id')
            ->select('vacancies_id','vacancies_apply.user_id','vacancies_apply.status','vacancies_apply.created_at','vacancies_apply.updated_at',
                    'users.username','users.email','users.nama_lengkap','users.member_id','users.tempat_lahir','users.tanggal_lahir','nomor_ijazah'
                    ,'tahun_masuk','tahun_lulus','no_sipp','skill_kompetensi','profile_singkat','jenis_kelamin','photo_profile','agama','layanan',
                    'vacancies.perusahaan','vacancies.nama_kategori','vacancies_apply.id')
            ->where('vacancies.user_id','=',Auth::user()->id)
            ->allowedSorts(['vacancies_id','user_id','vacancies_apply.status'])
            ->allowedFilters(['vacancies_apply.status','vacancies_id','user_id','users.username',AllowedFilter::exact('id'),AllowedFilter::custom('apply',new ApplyerFilter)])
            ->jsonPaginate()->appends(Request()->input());
        
        return new VacanciesApplyCollection($vacanciesApply);
    }
    /**
     * Apply Vacancies
     * untuk apply vacancies
     * @urlParam id integer idVacancies
     */
    public function applyVacancies($id)
    {
        $vacancies = $this->findDataVacancies($id);
        $apply = VacanciesApply::updateOrCreate(['vacancies_id'=>$vacancies->id,'user_id'=>app('auth')->user()->id],
                                                ['vacancies_id'=>$vacancies->id,'user_id'=>app('auth')->user()->id]);
        return response()->json([
            'status'=>'success',
            'message'=>'Berhasil apply vacancies',
            'data'=>$apply
        ]);
    }
    /**
     * update status applyer
     * @urlParam id id applyer
     * @bodyParam status string required
     */
    public function statusApplyer(Request $req,$id)
    {
        $model = VacanciesApply::findOrFail($id);
        $model->status = $req->status;
        if($model->save()){
            return response()->json([
                'status'=>'success',
                'message'=>'Berhasil ubah status applyer',
                'data'=>$model
            ]);
        }
    }
    /**
     * my apply
     */
    public function myApply()
    {
        $vacanciesApply = QueryBuilder::for(VacanciesApply::where('vacancies_apply.user_id',Auth::user()->id))
            ->join('vacancies','vacancies.id','=','vacancies_apply.vacancies_id')
            ->join('users','users.id','=','vacancies_apply.user_id')
            ->select('vacancies_apply.id','vacancies_id','vacancies_apply.user_id','vacancies_apply.status','vacancies_apply.created_at','vacancies_apply.updated_at',
            'username','email','nama_lengkap','member_id','tempat_lahir','tanggal_lahir','nomor_ijazah'
            ,'tahun_masuk','tahun_lulus','no_sipp','skill_kompetensi','profile_singkat','jenis_kelamin','photo_profile','agama','layanan',
            'perusahaan','nama_kategori','logo','judul')
            ->allowedSorts(['vacancies_id','user_id','status'])
            ->allowedFilters(['status','vacancies_id','user_id',AllowedFilter::custom('apply',new VacanciesApplyFilter)])
            ->jsonPaginate()->appends(Request()->input());
        
        return new VacanciesApplyCollection($vacanciesApply);
    }

    public function findDataVacancies($id)
    {
        $model = Vacancies::find($id);
        if(is_null($model)){
            throw new DataNotFound();
        }
        return $model;
    }
}
