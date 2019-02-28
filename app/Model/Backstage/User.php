<?php

namespace App\Model\Backstage;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    //
    protected $table = 'backstage_user';

    protected $fillable = [
        'username',
        'password',
        'name',
        'email'
    ];

    protected $hidden = [
        'password'
    ];
}
