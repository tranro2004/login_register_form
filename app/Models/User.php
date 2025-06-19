<?php
namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail {
    use Notifiable;

    protected $fillable = ['lastname', 'firstname', 'phone', 'email', 'password'];
    protected $hidden = ['password', 'remember_token'];
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function loginHistories() {
        return $this->hasMany(LoginHistory::class);
    }

    public function getNameAttribute(): string {
        return $this->lastname . ' ' . $this->firstname;
    }
}