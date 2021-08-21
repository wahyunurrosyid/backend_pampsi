<?php

namespace App\Jobs;

use App\Notifications\IgnoredAccount;

class IgnoredAccountJob extends Job
{
    protected $user;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($model)
    {
        $this->user = $model;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $this->user->notify(new IgnoredAccount);
    }
}
