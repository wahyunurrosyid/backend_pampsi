<?php

namespace App\Http\Controllers;

use App\Http\Resources\ActivityCollection;
use Illuminate\Http\Request;
use App\Models\Activity;
use Illuminate\Support\Facades\Auth;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

/**
 * @group Activity
 * @authenticated
 */
class ActivityController extends Controller
{
    /**
     * List Activity
     * untuk list activity
     * @queryParam fields[log_name] string select kolom 'log_name','description','subject_type',
     * 'subject_id','causer_type','causer_id','properties','created_at','updated_at'
     * @queryParam filter[log_name] string Filter by log_name. 
     * @queryParam sort string sort data berdasarkan kolom. tambah tanda (-) untuk DESC.
     * @queryParam page[number] integer optional
     * @queryParam page[size] integer oprional
     * @queryParam include string get data relasi (dataUser). 
     */
    public function listActivity()
    {
        $model = QueryBuilder::for(Activity::class)
            ->allowedSorts(['log_name','description','subject_type','subject_id','causer_type','causer_id','properties','created_at','updated_at'])
            ->allowedFilters(['log_name','description','subject_type','subject_id','causer_type','causer_id','properties','created_at','updated_at',AllowedFilter::exact('id')])
            ->jsonPaginate()->appends(Request()->input());
        return new ActivityCollection($model);
    }

    /**
     * Recent Activity
     * @urlParam model string
     */
    public function recentActivity($model)
    {
        $pathModel="App\Models\\$model";
        $recent = Activity::where('subject_type',$pathModel)
                        ->where('causer_id','!=',Auth::user()->id)
            	        ->join('users','activity_log.causer_id','=','users.id')
                        ->select('activity_log.id','causer_id','users.photo_profile','users.nama_lengkap','users.username','description','activity_log.created_at')
                        ->where('description','!=',strtolower($model))
                        ->limit(5)->orderBy('created_at','desc')
                        ->get();
        return $recent;
    }
}
