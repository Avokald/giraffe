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
            $table->unsignedInteger('pricing_month')->nullable();
            $table->unsignedInteger('pricing_year')->nullable();
            $table->text('description_long')->nullable();
            $table->text('description_short')->nullable();
            $table->unsignedSmallInteger('installation_difficulty')->nullable();
            $table->timestamps();

            $table->unsignedInteger('logo_id')->nullable();
            $table->unsignedInteger('banner_id')->nullable();
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
