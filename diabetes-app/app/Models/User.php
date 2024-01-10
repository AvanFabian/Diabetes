<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class User extends Model implements Authenticatable
{
    use AuthenticableTrait, HasFactory, Notifiable;

    public $timestamps = false;

    protected $fillable = [
        'email', 'password',
    ];

    protected $hidden = [
        'password',
    ];
}

