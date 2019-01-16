<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->unsignedSmallInteger('rating')->nullable();
            $table->unsignedInteger('pricing_month');
            $table->unsignedInteger('pricing_year');
            $table->text('description_long');
            $table->text('description_short');
            $table->unsignedSmallInteger('installation_difficulty');
            $table->timestamps();

            $table->unsignedInteger('logo_id');
            $table->unsignedInteger('banner_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
