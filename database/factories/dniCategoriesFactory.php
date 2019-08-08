<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Dni_categorie;
use Faker\Generator as Faker;

$factory->define(Dni_categorie::class, function (Faker $faker) {
    return [
        'nameDni' => $faker->name,
        'dataDni' => $faker->ean13,
    ];
});
