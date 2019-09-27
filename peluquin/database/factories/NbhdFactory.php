<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Nbhd;
use Faker\Generator as Faker;

$factory->define(Nbhd::class, function (Faker $faker) {
    return [
        // Fakers built on 2019-09-25
        //
        'name' => $faker->city,
        'postal_code' => $faker->postcode

    ];
});
