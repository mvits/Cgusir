<?php

use App\Autor;
use App\Usuario;
use Faker\Generator;

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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
/* Ejemplo

$factory->define(App\User::class, function (Faker\Generator $faker) {
static $password;

return [
'name' => $faker->name,
'email' => $faker->unique()->safeEmail,
'password' => $password ?: $password = bcrypt('secret'),
'remember_token' => str_random(10),
];
});

 */

$factory->define(Usuario::class, function (Generator $faker) {

    $array = [
        'numero_identificacion' => $faker->unique()->numberBetween(500000, 4000000000),
        'nombre'                => $faker->name,
        'codigo_estudiantil'    => $faker->unique()->numberBetween(20000000000, 20300000000),
        'correo'                => $faker->unique()->email,
        'password'              => bcrypt('Stiv48=@'),
    ];

    return $array;

});

$factory->define(Autor::class, function (Generator $faker) {

    $array = [
        'nombre'            => $faker->unique->name,
        'link_bibliografia' => $faker->url,
    ];

    return $array;

});
