<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Shop::class, function (Faker $faker) {
    return [

        // Original Fakers
        //
        //'email' => $faker->mail,
        //'name' =>  $faker->work,
        //'adress' => $faker->adress,
        //'work_hours' => $faker->time,
        //'password' =>$faker->bcrypt('pass')

        // Fakers built on 2019-09-20
        //
        //'email' => $faker->email,
        //'name' => $faker->company,
        //'address' => $faker->address,
        //'work_hours' => $faker->time,
        //'password' => $faker->password

        // Fakers built on 2019-09-25
        //
        'email' => $faker->email,
        'name' => $faker->company,
        'points' => $faker->randomDigit,
        'address' => $faker->address,
        'nbhd' => $faker->city,
        'work_hours' => $faker->time,
        'password' => $faker->password

    ];
});
