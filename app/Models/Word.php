<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }

    public function activities()
    {
        return $this->morphMany(Activity::class, 'activityTable');
    }
}
