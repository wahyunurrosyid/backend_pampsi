<?php 
namespace App\Spatie;

use Spatie\QueryBuilder\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class VacanciesApplyFilter implements Filter
{
    public function __invoke(Builder $query, $value, string $property)
    {
        if (!is_array( $value )) {
           $value = [ $value ];
        }

       foreach ($value  as  $filter) {
                $query->where(function($query)use($filter){
                    return $query->orWhere('perusahaan', 'like', '%' . $filter . '%')
                        ;
                    });
        }

       return  $query ;
    }
}