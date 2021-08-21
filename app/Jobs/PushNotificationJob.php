<?php

namespace App\Jobs;

use Kreait\Firebase\Factory;
use Kreait\Firebase\Messaging\CloudMessage;
use Kreait\Firebase\Messaging\Notification as Notif;
use App\Models\TokenFcm;

class PushNotificationJob extends Job
{
    protected $user_id;
    protected $title;
    protected $value;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($user_id,$title,$value)
    {
        $this->user_id=$user_id;
        $this->title=$title;
        $this->value=$value;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $getToken = TokenFcm::where('user_id',$this->user_id)->first();
        $factory = (new Factory)->withServiceAccount(base_path() . env('PATH_FIRE_JSON'));
        $messaging = $factory->createMessaging();
        $message = CloudMessage::withTarget('token', $getToken->token)
                            ->withNotification(Notif::create($this->title,$this->value));
        $messaging->send($message);
    }
}
