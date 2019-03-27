<?php

use Illuminate\Database\Seeder;

class MaterialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Material::class, 1)->state('service-pdf')->create(['materiable_id' => 1]);
        factory(\App\Material::class, 1)->state('service-document')->create(['materiable_id' => 1]);
        factory(\App\Material::class, 1)->state('service-presentation')->create(['materiable_id' => 1]);
    }
}
