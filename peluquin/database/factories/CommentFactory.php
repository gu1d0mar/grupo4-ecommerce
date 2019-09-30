<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Comment;
use App\Shop;
use App\User;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
  $shops = Shop::all();
  $users = User::all();

  return [
    'shop_id' =>$faker->randomElement(Shop::all()->pluck('id')->toArray()),
    'user_id' => $faker->randomElement(User::all()->pluck('id')->toArray()),
    'comment' => $faker->text($maxNbChars = 300),
    'rating' => $faker->numberBetween($min = 0, $max = 5),
  ];

});
