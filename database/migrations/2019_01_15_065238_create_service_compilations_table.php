<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceCompilationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_compilations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->unsignedInteger('view_count')->default(0);
            $table->unsignedInteger('price_month')->nullable();
            $table->unsignedInteger('price_year')->nullable();
            $table->unsignedInteger('category_id')->nullable();
            $table->timestamps();

            $table->string('hover_title')->nullable()->default(null);
            $table->string('hover_description')->nullable()->default(null);

            $table->string('slug');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_compilations');
    }
}
