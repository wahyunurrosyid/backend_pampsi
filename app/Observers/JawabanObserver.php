<?php

namespace App\Observers;

use App\Models\Survey;
use App\Notifications\RespondenResponse;
use Illuminate\Support\Facades\Notification;
use Spatie\Permission\Models\Role;

trait JawabanObserver {

    protected static function boot(){

        parent::boot();
        
        static::created(function($jawaban){
            Notification::route('mail', $jawaban->dataSurvey->email)->notify(new RespondenResponse());
        });

    }
}