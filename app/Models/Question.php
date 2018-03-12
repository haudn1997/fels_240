<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function test()
    {
        return $this->belongsTo(Test::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function answers()
    {
        return $this->belongsToMany(Answer::class);
    }
}
