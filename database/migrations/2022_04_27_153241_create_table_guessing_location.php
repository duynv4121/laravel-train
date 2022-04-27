<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type_pickup_dropoff')->nullable();
            $table->string('block')->nullable();
            $table->string('building')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('street')->nullable();
            $table->string('unit')->nullable();
            $table->string('location')->nullable();
            $table->string('coordinates')->nullable();
            $table->integer('child_id')->unsigned();
            $table->timestamps();

            $table->foreign('child_id')->references('id')->on('children')->onDelete('cascade');     
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guessing_location');
    }
};
