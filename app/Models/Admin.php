<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;


use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
        protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'two_factor_confirmed_at' => 'datetime',
        ];
    }

}
