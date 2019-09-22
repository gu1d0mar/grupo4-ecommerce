<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Shop::class, function (Faker $faker) {
    return [
        //'email' => $faker->mail,
        //'name' =>  $faker->work,
        //'adress' => $faker->adress,
        //'work_hours' => $faker->time,
        //'password' =>$faker->bcrypt('pass')
        'email' => $faker->email,
        'name' => $faker->company,
        'address' => $faker->address,
        'work_hours' => $faker->time,
        'password' => $faker->password

    ];
});
