<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // 🔥 PRIMARY KEY = npm
    protected $primaryKey = 'npm';
    public $incrementing = false;
    protected $keyType = 'string';

    // 🔥 FIELD YANG BOLEH DIISI
    protected $fillable = [
        'npm',
        'username',
        'first_name',
        'last_name',
        'email',
        'password',
    ];

    // 🔥 FIELD YANG DISEMBUNYIKAN
    protected $hidden = [
        'password',
    ];

    // 🔥 CASTING
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}