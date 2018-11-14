<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->jobTitle,
        'description' => $faker->text($maxNbChars = 200) 
    ];
});
