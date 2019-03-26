<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTariffUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tariff_user', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('tariff_id');
            $table->unsignedInteger('user_id');
            $table->timestamps();

            $table->foreign('tariff_id')
                ->references('id')
                ->on('tariffs')
                ->onDelete('cascade');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tariff_user');
    }
}
