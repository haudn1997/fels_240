<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
	public function activityTable()
    {
        return $this->morphTo();
    }
}
