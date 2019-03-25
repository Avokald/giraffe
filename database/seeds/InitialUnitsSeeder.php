<?php

use Illuminate\Database\Seeder;

class InitialUnitsSeeder extends Seeder
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

        $this->call(UsersTableSeeder::class);
    }
}
