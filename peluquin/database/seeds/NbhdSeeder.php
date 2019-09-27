<?php

use App\Nbhd;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class NbhdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Nbhd::class)->times(20)->create();
    }
}
