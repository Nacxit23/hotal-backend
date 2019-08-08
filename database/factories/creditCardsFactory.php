<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(App\Model\Credit_card::class, function (Faker $faker) {
    return [
        'title_name' => $faker->creditCardNumber,
        'expiration_date' => $faker->date,
        'creditCards_number' => $faker->creditCardNumber,
        'segurity_number' => $faker->creditCardNumber,
    ];
});
