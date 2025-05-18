<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = ['username', 'password'];

    // Agar login pakai username, bukan email
    public function getAuthIdentifierName()
    {
        return 'username';
    }

    protected $hidden = ['password', 'remember_token'];
}
