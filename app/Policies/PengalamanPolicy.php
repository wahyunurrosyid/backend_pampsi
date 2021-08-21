<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PengalamanPolicy
{
    use HandlesAuthorization;

    public function updatePengalaman(User $user,$user_id)
    {
        return $user->id === $user_id;
    }

    public function deletePengalaman(User $user,$user_id)
    {
        return $user->id === $user_id;
    }
}
