<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePageElementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_elements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->json('values');
            $table->string('html_id')->nullable();
            $table->boolean('hidden')->default(false);
            $table->timestamps();
            $table->unsignedInteger('page_id')->nullable();
            $table->unsignedInteger('page_element_type_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('page_elements');
    }
}
