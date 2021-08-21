<?php

namespace App\Jobs;

use App\Notifications\LengkapiProfil as Lengkapi;

class LengkapiProfil extends Job
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
        $this->user->notify(new Lengkapi);
    }
}
