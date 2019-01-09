<?php

namespace App\Policies;

use App\User;
use App\Gradients;
use Illuminate\Auth\Access\HandlesAuthorization;

class GradientPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function pass(User $user, Gradients $gradient)
    {
        return $user->id == $gradient->user_id; 
    }
}
