<?php

namespace App\Jobs;

use App\Notifications\ConfirmedAccount;

class ProcessConfirmed extends Job
{
    protected $user;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $this->user->notify(new ConfirmedAccount);
    }
}
