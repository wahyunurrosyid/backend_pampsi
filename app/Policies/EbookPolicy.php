<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class EbookPolicy
{
    use HandlesAuthorization;

    public function updateEbook(User $user,$user_id)
    {
        return $user->id === $user_id;
    }

    public function deleteEbook(User $user,$user_id)
    {
        return $user->id === $user_id;
    }
}
