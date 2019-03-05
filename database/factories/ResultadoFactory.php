<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Resultado::class, function (Faker\Generator $faker) {
    return [
        'descripcion' => $faker->sentence(3, false),
        'valor' => $faker->randomNumber($nbDigits = 2),
        'id_cuest_eval' => '1',        
    ];
});