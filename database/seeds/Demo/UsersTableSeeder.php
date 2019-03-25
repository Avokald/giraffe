<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Admin::class, 1)->state('admin')->create();

        factory(\App\User::class, 2)->state('user')->create();
    }
}
