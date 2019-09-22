<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Shop::class, function (Faker $faker) {
    return [
        'email' => $faker->mail,
        'name' =>  $faker->work,
        'adress' => $faker->adress,
        'work_hours' => $faker->time,
        'password' =>$faker->bcrypt('pass')

    ];
});
