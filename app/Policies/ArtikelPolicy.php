<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ArtikelPolicy
{
    use HandlesAuthorization;

    public function updateArtikel(User $user,$user_id)
    {
        return $user->id === $user_id;
    }

    public function deleteArtikel(User $user,$user_id)
    {
        return $user->id === $user_id or $user->hasRole('ADMIN');;
    }
}
