<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class GoogleUser extends Authenticatable
{
    protected $table = 'google_users';
    protected $fillable = [
        'name', 'email', 'google_id',
    ];
}
