<?php

namespace App\Jobs;

use App\Notifications\TungguVerifikasiAdmin as TungguAdmin;

class TungguVerifikasiAdmin extends Job
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
        $this->user->notify(new TungguAdmin);
    }
}
