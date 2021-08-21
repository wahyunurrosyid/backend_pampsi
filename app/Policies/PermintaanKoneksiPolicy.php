<?php

namespace App\Policies;

use App\Models\PermintaanKoneksi;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PermintaanKoneksiPolicy
{
    use HandlesAuthorization;

    public function responPermintaan(User $user,$target_id)
    {
        return $user->id === $target_id;
    }
}
