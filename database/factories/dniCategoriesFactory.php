<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\DniCategorie;
use Faker\Generator as Faker;

$factory->define(DniCategorie::class, function (Faker $faker) {
    return [
        'nameDni' => $faker->name,
        'dataDni' => $faker->ean13,
    ];
});
