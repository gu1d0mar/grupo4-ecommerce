<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\User;
use App\Nbhd;
use Faker\Generator as Faker;

$factory->define(USer::class, function (Faker $faker) {
  return [
    'username' =>$faker->username,
    'email'=>$faker->email,
    'first_name' => $faker->firstName,
    'last_name' => $faker->lastName,
    'nbhd_id' => $faker->randomElement(Nbhd::all()->pluck('id')->toArray()),
    'bday' => $faker->date,
    'password' => $faker->password,
  ];
});
