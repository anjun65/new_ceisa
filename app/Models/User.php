<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Storage;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable, HasFactory;

    protected $guarded = [];

    protected $hidden = [
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    const ROLES = [
        'USER' => 'User',
        'ADMIN' => 'Admin',
    ];

    public function avatarUrl()
    {
        return $this->avatar
            ? Storage::disk('avatars')->url($this->avatar)
            : 'https://www.gravatar.com/avatar/'.md5(strtolower(trim($this->email)));
    }

    // public function setPasswordAttribute($value)
    // {
    //     $this->password = Hash::make($value); 
    // }
    
}
