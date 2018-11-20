<?php

use Faker\Generator as Faker;

$factory->define(App\Service::class, function (Faker $faker) {
    return [
        'name' => $faker->jobTitle,
        'description' => $faker->text($maxNbChars = 200),
        'price' => $faker->numberBetween($min = 1000, $max = 6000),
        'category_id' => $faker->numberBetween($min = 1, $max = 11),
        'user_id' => $faker->numberBetween($min = 1, $max = 15),
        'imagedescription' => $faker->imageUrl($width = 640, $height = 480),

    ];
});
