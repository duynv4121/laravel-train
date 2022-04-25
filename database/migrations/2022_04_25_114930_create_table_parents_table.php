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
        Schema::create('parents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('father_family_name')->nullable();
            $table->string('father_first_name')->nullable();
            $table->string('father_mobile_phone')->nullable();
            $table->string('father_office_phone')->nullable();
            $table->string('father_email_address')->nullable();

            $table->string('mother_family_name')->nullable();
            $table->string('mother_first_name')->nullable();
            $table->string('mother_mobile_phone')->nullable();
            $table->string('mother_office_phone')->nullable();
            $table->string('mother_email_address')->nullable();

            $table->string('guardian_family_name')->nullable();
            $table->string('guardian_first_name')->nullable();
            $table->string('guardian_mobile_phone')->nullable();
            $table->string('guardian_office_phone')->nullable();
            $table->string('guardian_email_address')->nullable();

            $table->string('people_contact')->nullable();

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
        Schema::dropIfExists('parents');
    }
};


