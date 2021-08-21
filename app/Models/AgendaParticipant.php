<?php

namespace App\Models;

use App\Observers\ParticipantAgendaObserver;
use Illuminate\Database\Eloquent\Model;

class AgendaParticipant extends BaseModel
{
    use ParticipantAgendaObserver;

    protected $table = 'agenda_participant';
    protected $fillable = ['agenda_id','user_id'];

    public function rules()
    {
        return [];
    }

    public function attributesLabel()
    {
        return [];
    }

    public function dataUser()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function dataAgenda()
    {
        return $this->belongsTo(Agenda::class,'agenda_id','id');
    }
}
