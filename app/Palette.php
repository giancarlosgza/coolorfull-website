<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Palette extends Model
{
    protected $fillable = [
        'id', 'user_id', 'name', 'color_1', 'color_2', 
        'color_3', 'color_4', 'image_name', 'color_filter','color_filter_2'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
