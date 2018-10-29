<?php

use Faker\Generator as Faker;

$factory->define(App\Categoria::class, function (Faker $faker) {
    return [
        'nombre' => $faker->word,
        'descripcion' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'condicion' => (bool)rand(0,1)
    ];
});
