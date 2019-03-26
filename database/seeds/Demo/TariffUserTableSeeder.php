<?php

use Illuminate\Database\Seeder;

class TariffUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = \App\User::find(2);
        $user2 = \App\User::find(3);

        $user1->services()->attach(1);
        $user2->services()->attach(1);
    }
}
