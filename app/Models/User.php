<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{

    use HasApiTokens, Notifiable, HasFactory;

    protected $keyType = 'string';


    protected $fillable = [
        'id', 'name', 'last_name', 'email', 'phone', 'role', 'password'
    ];

    public $incrementing = false;

    protected $hidden = [
        'password'
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
