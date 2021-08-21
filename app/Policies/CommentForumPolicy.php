<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CommentForumPolicy
{
    use HandlesAuthorization;

    public function updateCommentForum(User $user, $user_id)
    {
        return $user->id === $user_id;
    }

    public function deleteCommentForum(User $user, $user_id)
    {
        return $user->id === $user_id;
    }
}
