<?php

namespace App\Jobs;

use App\Notifications\ReminderEvent;

class ReminderParticipantJob extends Job
{
    protected $user;
    protected $agenda;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($user,$agenda)
    {
        $this->user = $user;
        $this->agenda = $agenda;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $this->user->notify(new ReminderEvent($this->agenda));
    }
}
