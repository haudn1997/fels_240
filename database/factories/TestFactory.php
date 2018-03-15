<?php

use Faker\Generator as Faker;
use App\Models\Lesson;
use App\Models\Test;
use Illuminate\Support\Collection;

$factory->define(Test::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'lesson_id' => Lesson::all()->random()->id,
    ];
});
