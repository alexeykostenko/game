<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Voter extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_agent', 'ip',
    ];
}
