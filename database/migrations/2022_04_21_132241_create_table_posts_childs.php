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
            $table->id();
            $table->string('familyName');
            $table->string('givenName');
            $table->string('grade');
            $table->string('gender');
            $table->string('route');
            $table->string('birthDay');
            $table->string('schoolId');
            $table->string('dateChoose');
            $table->string('description')->nullable();
            $table->text('baseImg');
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
        Schema::dropIfExists('childs');
    }
};
