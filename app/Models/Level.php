<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
}
