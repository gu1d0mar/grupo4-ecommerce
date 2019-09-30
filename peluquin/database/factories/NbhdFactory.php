<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Nbhd;
use Faker\Generator as Faker;

$factory->define(Nbhd::class, function (Faker $faker) {
    return [
        'name' => $faker->city,
        'postal_code' => $faker->postcode
    ];
});
