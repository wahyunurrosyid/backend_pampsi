<?php 
namespace App\Spatie;

use Spatie\QueryBuilder\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;

class EbookFilter implements Filter
{
    public function __invoke(Builder $query, $value, string $property)
    {
        $query->where('judul', 'like', '%' . $value . '%')
            ->orWhere('author', 'like', '%' . $value . '%');
    }
}