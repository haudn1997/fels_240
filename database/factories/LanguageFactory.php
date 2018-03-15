<?php

use Faker\Generator as Faker;
use App\Models\Language;

$factory->define(Language::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
