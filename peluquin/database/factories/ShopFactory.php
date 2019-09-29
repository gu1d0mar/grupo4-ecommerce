<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Shop;
use App\Nbhd;
use Faker\Generator as Faker;

$factory->define(Shop::class, function (Faker $faker) {
    $nbhd = Nbhd::all();
    return [
        // Fakers built on 2019-09-25
        //
        'email' => $faker->email,
        'name' => $faker->company,
        'rating' => $faker->numberBetween($min = 0, $max = 5),
        'address' => $faker->address,
        'nbhd_id' => $nbhd->random()->id,
        'work_hours' => $faker->time,
        'password' => $faker->password,
        // 'logo' => $faker->image('public/storage/shops',640,480, null, false),


    ];
});
