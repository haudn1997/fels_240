<?php

use Faker\Generator as Faker;
use App\Models\Level;
use App\Models\Lesson;
use Illuminate\Support\Collection;

$factory->define(Lesson::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'result' => 50,
        'level_id' => Level::all()->random()->id,
    ];
});
