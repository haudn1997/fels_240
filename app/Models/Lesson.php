<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function words()
    {
        return $this->hasMany(Word::class);
    }

    public function tests()
    {
        return $this->hasMany(Test::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('status')->withTimestamps();
    }
}
