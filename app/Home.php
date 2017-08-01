<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $casts = [
        'user' => 'array',
        'urls' => 'array',
    ];
}
