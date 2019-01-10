<?php

namespace App\Policies;

use App\User;
use App\Palette;
use Illuminate\Auth\Access\HandlesAuthorization;

class PalettePolicy
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
    
    public function pass(User $user, Palette $palette)
    {
        return $user->id == $palette->user_id; 
    }
}
