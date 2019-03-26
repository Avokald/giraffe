<?php

use Illuminate\Database\Seeder;

class InitUnitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PagesTableSeeder::class);

        $this->call(PageElementTypesTableSeeder::class);

        $this->call(PageElementsTableSeeder::class);

        $this->call(MenusTableSeeder::class);

        $this->call(MenuElementsTableSeeder::class);

        $this->call(SettingsTableSeeder::class);

        $this->call(PhrasesTableSeeder::class);

        $this->call(ServiceCompilationSituationsTableSeeder::class);

        $this->call(UserRolesTableSeeder::class);

        $this->call(AdminUsersTableSeeder::class);
    }
}
