<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceCompilationServiceCompilationSituationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_compilation_service_compilation_situation', function (Blueprint $table) {
            $table->unsignedInteger('service_compilation_id');
            $table->unsignedInteger('service_compilation_situation_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_compilation_service_compilation_situation');
    }
}
