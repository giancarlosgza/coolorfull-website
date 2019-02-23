<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pro extends Model
{
    protected $fillable = [
        'name', 'email',
    ];
}
