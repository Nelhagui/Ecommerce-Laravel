<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement($array = array ('Gastronomía','Deporte','Tecnología', 'Evento')),
        'description' => $faker->text($maxNbChars = 200) 
    ];
});
