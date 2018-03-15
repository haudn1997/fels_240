<?php

use Faker\Generator as Faker;
use Illuminate\Support\Collection;
use App\Models\Lesson;
use App\Models\Word;

$factory->define(Word::class, function (Faker $faker) {
    return [
        'content' => $faker->word,
        'mean' => $faker->word,
        'lesson_id' => Lesson::all()->random()->id,
    ];
});
