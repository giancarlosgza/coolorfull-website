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

    protected $casts = [
        
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'username', 'paid', 'paypal_order_id', 'paid_until', 'renew_alert'
    ];

    /**
     * Check if subscription is still valid
     * @return boolean
     */
    public function validSubscription()
    {
        return !$this->paid_until ? true : strtotime(date('Ymd')) < strtotime($this->paid_until);
    }

    public function gradients() 
    {
        return $this->hasMany('App\Gradients');
    }

    public function publicGradients() {
        return $this->gradients()->where('is_public', true);
    }

    public function palettes() 
    {
        return $this->hasMany('App\Palette');
    }

    public function favoriteGradients() 
    {
        return $this->belongsToMany('App\Gradients', 'gradient_user', 'user_id', 'gradient_id');
    }

    public function favoritePalettes() 
    {
        return $this->belongsToMany('App\Palette', 'palette_user', 'user_id', 'palette_id');
    }
}
