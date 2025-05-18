<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = ['username', 'password'];

    public function getAuthIdentifierName()
    {
        return 'username'; // supaya login pakai username
    }

    protected $hidden = ['password'];
}
