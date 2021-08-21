<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Database\Eloquent\Model;

abstract class Event
{
    use SerializesModels;

    public $like;

    public function __construct(Model $like)
    {
        $this->like = $like;
    }
}
