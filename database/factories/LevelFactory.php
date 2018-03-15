<?php

use Faker\Generator as Faker;
use Illuminate\Support\Collection;
use App\Models\Language;
use App\Models\Level;

$factory->define(Level::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'language_id' => Language::all()->random()->id,
        'total_score' => 150,
    ];
});
