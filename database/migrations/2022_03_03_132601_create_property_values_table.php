<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_values', function (Blueprint $table) {
            $table->id();
            $table->integer('item_id')->unsigned();
            $table->foreign('item_id')->references('id')->on('items');
            $table->integer('dataset_id')->unsigned();
            $table->foreign('dataset_id')->references('id')->on('datasets');
            $table->integer('property_id')->unsigned();
            $table->foreign('property_id')->references('id')->on('properties');
            $table->json('value');
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
        Schema::dropIfExists('property_values');
    }
}
