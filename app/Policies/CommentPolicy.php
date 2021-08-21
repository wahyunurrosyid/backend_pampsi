<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CommentPolicy
{
    use HandlesAuthorization;

    public function updateComment(User $user, $user_id)
    {
        return $user->id === $user_id;
    }

    public function deleteComment(User $user, $user_id)
    {
        return $user->id === $user_id;
    }
}
