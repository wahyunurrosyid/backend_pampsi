<?php 
namespace App\Spatie;

use Spatie\QueryBuilder\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;

class AgendaFilter implements Filter
{
    public function __invoke(Builder $query, $value, string $property)
    {
        $query->where('judul', 'like', '%' . $value . '%')
            ->orWhere('pemateri', 'like', '%'. $value . '%')
            ->orWhere('lokasi', 'like', '%'. $value . '%');
    }
}