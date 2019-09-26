<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use App\Shop;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $shops = Shop::all();
    return [
        'name' => $faker->company,
        'description' => $faker->sentence,
        'price' => $faker->randomDigit,
        'shop_id' => $shops->random()->id,
    ];
});
