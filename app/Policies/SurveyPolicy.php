<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SurveyPolicy
{
    use HandlesAuthorization;

    public function updateSurvey(User $user,$user_id)
    {
        return $user->id === $user_id;
    }

    public function deleteSurvey(User $user,$user_id)
    {
        return $user->id === $user_id;
    }
}
