<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Customer extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'address',
        'birth_date',
        'gender',
        'avatar',
        'is_active',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'birth_date' => 'date',
        'is_active' => 'boolean',
    ];

    public function getAvatarUrlAttribute()
    {
        if ($this->avatar && file_exists(public_path('storage/avatars/' . $this->avatar))) {
            return asset('storage/avatars/' . $this->avatar);
        }
        
        // Default avatar berdasarkan gender
        $defaultAvatar = $this->gender === 'female' ? 'default-female.png' : 'default-male.png';
        return asset('images/avatars/' . $defaultAvatar);
    }

    public function getFirstNameAttribute()
    {
        return explode(' ', $this->name)[0];
    }
}