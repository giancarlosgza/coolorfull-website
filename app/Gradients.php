<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gradients extends Model
{
    protected $fillable = [
        'id', 'user_id', 'name', 'color_1', 'color_2', 'image_name',
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
