<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'username',
    ];

    public function gradients() {
        return $this->hasMany('App\Gradients');
    }

    public function palettes() {
        return $this->hasMany('App\Palette');
    }

    public function favoriteGradients() {
        return $this->belongsToMany('App\Gradients', 'gradient_user', 'user_id', 'gradient_id');
    }
}
