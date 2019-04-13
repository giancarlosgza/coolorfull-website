<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gradients extends Model
{
    protected $fillable = [
        'id', 'user_id', 'name', 'color_1', 'color_2', 'color_3', 'image_name','color_filter','color_filter_2', 'is_public'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function usersWhoFav() {
        return $this->belongsToMany('App\User', 'gradient_user', 'gradient_id', 'user_id');
    }
}
