<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class users_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->times(20)->create();
    }
}
