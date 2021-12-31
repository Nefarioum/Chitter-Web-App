<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasFactory, Notifiable, Followable;

    protected $fillable = [
        'username','name', 'avatar', 'avatar_path', 'email', 'description', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function chits(){
        return $this->hasMany(Chit::class)->latest();
    }

    public function timeline(){
        $followingIds = $this->follows()->pluck('id');

        return Chit::whereIn('user_id', $followingIds)
            ->orWhere('user_id', $this->id)
            ->latest()
            ->paginate(50);
    }

    public function setPasswordAttribute($value) {
        $this->attributes['password'] = Hash::needsRehash($value) ? Hash::make($value) : $value;
    }

    public function getAvatarPathAttribute($value){
        if($value) return asset('storage/'.$value);

        return 'https://eu.ui-avatars.com/api/?size=200&name=' . urlencode($this->username);
    }

    public function getAvatarRawPath(){
        return $this->avatar;
    }

    public function path($append = ''){
        $userPath = route('profile', $this->username);

        return $append ? "{$userPath}/{$append}" : $userPath;
    }
}


