<?php

namespace App\Observers;

use App\Jobs\ReminderParticipantJob;
use App\Models\Agenda;
use App\Models\User;
use Carbon\Carbon;

trait ParticipantAgendaObserver {

    protected static function boot(){

        parent::boot();
        
        static::created(function($participant){
            $user = User::find($participant->user_id);
            $agenda = Agenda::find($participant->agenda_id);
            $diffTime = Carbon::parse($agenda->start_date)->diffInMinutes(Carbon::now());
            dispatch(new ReminderParticipantJob($user,$agenda))->delay($diffTime-1440);
        });

    }
}