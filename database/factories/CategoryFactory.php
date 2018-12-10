<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement($array = array ('Gastronomía','Deporte','Tecnología', 'Fiestas y Eventos', 'Belleza', 'Animales y Mascotas', 'Arte y Artesanías', 'Construcción', 'Música', 'Educación', 'Transporte')),
        'description' => $faker->text($maxNbChars = 200),
        'image' => $faker->imageUrl($width = 481, $height = 299)
    ];
});
