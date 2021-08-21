<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RekomendasiPolicy
{
    use HandlesAuthorization;

    /**
     * @param penerima_rekomendasi integer
     * @param pemberi_rekomendasi integer
     */
    public function updateRekomendasi(User $user,$pemberi,$penerima)
    {
        if($user->id === $pemberi){
            return true;
        }elseif($user->id === $penerima){
            return true;
        }
        return false;
    }
    /**
     * @param penerima_rekomendasi integer
     * @param pemberi_rekomendasi integer
     */
    public function deleteRekomendasi(User $user,$pemberi,$penerima)
    {
        if($user->id === $pemberi){
            return true;
        }elseif($user->id === $penerima){
            return true;
        }
        return false;
    }
}
