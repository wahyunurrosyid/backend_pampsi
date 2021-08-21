<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Feed;
use Illuminate\Auth\Access\HandlesAuthorization;

class FeedPolicy
{
    use HandlesAuthorization;

    public function updateFeed(User $user,$user_id)
    {
        return $user->id === $user_id;
    }

    public function deleteFeed(User $user,$user_id)
    {
        return $user->id == $user_id;
    }
}
