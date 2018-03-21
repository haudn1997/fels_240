<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 
        'email', 
        'password',
    ];

    protected $hidden = [
        'password', 
        'remember_token',
    ];

    public function lessons()
    {
        return $this->belongsToMany(Lesson::class)->withPivot('result')->withTimestamps();
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function setFirstNameAttribute($value)
    {
        $this->attributes['name'] = ucfirst($value);
    }
}
