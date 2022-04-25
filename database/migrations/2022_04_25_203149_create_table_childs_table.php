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
        Schema::create('childs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_parent')->unsigned();
            $table->string('family_name');
            $table->string('given_name');
            $table->text('grade');
            $table->string('gender');
            $table->string('route');
            $table->string('birth_day');
            $table->string('school_id');
            $table->string('select_type');
            $table->string('date_choose');
            $table->string('description')->nullable();
            $table->text('base_img');
            $table->timestamps();

            $table->foreign('id_parent')->references('id')->on('parents')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('childs');
    }
};
