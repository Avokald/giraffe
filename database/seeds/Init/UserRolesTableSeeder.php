<?php

use Illuminate\Database\Seeder;

class UserRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\UserRole::create([
            'name' => 'user',
        ]);

        $admin = \App\UserRole::create([
            'name' => 'admin',
        ]);
    }
}
