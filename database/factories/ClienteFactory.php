<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cliente;
use App\User;
use Faker\Factory;
use Faker\Generator as Faker;

$fakerES = Factory::create('es_ES');

$factory->define(Cliente::class, function (Faker $faker) use ($fakerES){


    return [
        //
        'ci' => $fakerES->numberBetween(3000000, 5000000),
        'user_id' => User::all('id')->random(),
        'nombres' => $fakerES->firstName,
        'apellidos' => $fakerES->lastName,
        'telefono' => $fakerES->numberBetween(60000000, 80000000),
        'direccion' => $fakerES->address,
        'ubicacion' => $fakerES->address,
        'mac' => $fakerES->macAddress,
        'estado' => 'AC'
    ];
});
