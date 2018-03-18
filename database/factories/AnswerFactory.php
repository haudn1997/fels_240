<?php

use Faker\Generator as Faker;
use Illuminate\Support\Collection;
use App\Models\Answer;

$factory->define(Answer::class, function (Faker $faker) {
    return [
        'content' => $faker->word,
        'is_true' => rand(0,1),
        'correct' => rand(0,1),
    ];
});
