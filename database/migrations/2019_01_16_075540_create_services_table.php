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
            $table->unsignedBigInteger('view_count')->default(0);
            $table->unsignedBigInteger('deals_count')->default(0);
            $table->boolean('force_rating')->default(false);
            $table->text('description_long')->nullable();
            $table->text('description_short')->nullable();
            $table->text('materials_description')->nullable();
            $table->json('features')->nullable();
            $table->json('videos')->nullable();
            $table->unsignedSmallInteger('installation_difficulty')->nullable();
            $table->timestamps();
            $table->string('slug');
            $table->string('partner_url')->nullable()->default(null);

            $table->unsignedInteger('category_id')->nullable();
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
