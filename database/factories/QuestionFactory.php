<?php

use Faker\Generator as Faker;
use Illuminate\Support\Collection;
use App\Models\Test;
use App\Models\Type;
use App\Models\Question;

$factory->define(Question::class, function (Faker $faker) {
    return [
        'content' => $faker->word,
        'test_id' => Test::all()->random()->id,
        'type_id' => Type::all()->random()->id,
    ];
});
