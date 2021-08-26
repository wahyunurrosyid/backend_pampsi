<?php

namespace App\Policies;

use App\Models\ModeratorForum;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ForumPolicy
{
    use HandlesAuthorization;

    public function updateForum(User $user,$user_id)
    {
        return $user->id === $user_id or $user->hasRole('ADMIN');
    }

    public function deleteForum(User $user,$user_id)
    {
        return $user->id === $user_id or $user->hasRole('ADMIN');
    }

    public function updateStatusForum(User $user,$kategori)
    {
        // $moderator = ModeratorForum::where(['user_id'=>$user->id,'nama_kategori'=>$kategori])->first();
        return $user->hasRole('ADMIN'); 
    }
}
