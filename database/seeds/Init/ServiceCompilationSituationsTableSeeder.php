<?php

use Illuminate\Database\Seeder;
use \App\ServiceCompilationSituation;

class ServiceCompilationSituationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $justStarted = ServiceCompilationSituation::create([
           'name' => 'Я только начал, у меня есть идея',
        ]);

        $alreadyWorking = ServiceCompilationSituation::create([
           'name' => 'Я уже работаю, есть свой сайт',
        ]);

        $startingToMarket = ServiceCompilationSituation::create([
           'name' => 'У меня есть свой сайт и я начал его продвигать',
        ]);

        $alreadyMarketing = ServiceCompilationSituation::create([
           'name' => 'Я продвигаю свой сайт, но мне не хватает объёма',
        ]);

        $offlineActivity = ServiceCompilationSituation::create([
           'name' => 'Мне нужны оффлайн активности',
        ]);

    }
}
