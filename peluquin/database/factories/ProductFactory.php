<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use App\Shop;
use App\Category;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $shops = Shop::all();
    $categories = Category::all();

    return [
        'name' => $faker->company,
        'description' => $faker->sentence,
        'price' => $faker->numberBetween($min = 250, $max = 2500),
        'shop_id' => $faker->randomElement(Shop::all()->pluck('id')->toArray()),
        'category_id' =>$faker->randomElement(Category::all()->pluck('id')->toArray()),
    ];
});
