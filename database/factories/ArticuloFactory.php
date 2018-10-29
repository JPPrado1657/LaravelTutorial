<?php

use Faker\Generator as Faker;

$factory->define(App\Articulo::class, function (Faker $faker) {
    return [
        'nombre' => $faker->word,
        'precio_venta' => $faker->randomDigitNotNull,
        'stock' => $faker->randomDigitNotNull,
        'descripcion' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'condicion' => (bool)rand(0,1)
    ];
});
