<?php

use App\Shop;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Shop::class)->times(20)->create();
    }
}
