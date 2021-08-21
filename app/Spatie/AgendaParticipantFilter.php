<?php 
namespace App\Spatie;

use Spatie\QueryBuilder\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;
use App\Models\AgendaParticipant;

class AgendaParticipantFilter implements Filter
{
    protected $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function __invoke(Builder $query, $value, string $property)
    {
        $query
            ->join('users','agenda_participant.user_id','=','users.id')
            ->where('users.nama_lengkap','like', '%'.$value.'%')
            ->orWhere('users.tempat_lahir','like', '%'.$value.'%')
            ->orWhere('users.no_hp','like', '%'.$value.'%')
            ;
    }
}