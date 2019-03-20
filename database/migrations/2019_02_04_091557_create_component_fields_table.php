<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComponentFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('component_fields', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('page_id');
            $table->foreign('page_id')->references('id')->on('pages');
            $table->uuid('component_id');
            $table->foreign('component_id')->references('id')->on('components');
            $table->uuid('field_id');
            $table->foreign('field_id')->references('id')->on('fields');
            $table->longText('value')->nullable()->default(null);
            $table->uuid('link_id')->nullable()->default(null);
            $table->foreign('link_id')->references('id')->on('links');
            $table->uuid('image_id')->nullable()->default(null);
            $table->foreign('image_id')->references('id')->on('images');
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('component_fields');
    }
}
