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
        Schema::create('children', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('family_id')->unsigned();
            $table->string('family_name');
            $table->string('given_name');
            $table->string('grade')->nullable();
            $table->string('gender');
            $table->string('route_service');
            $table->date('date_of_birth');
            $table->string('school_code')->nullable();
            $table->string('type_of_service');
            $table->date('date_start')->nullable();
            $table->text('descriptions')->nullable();
            $table->string('image')->nullable();
            $table->integer('first_contact_id')->unsigned();
            $table->string('payment_contact_type');
            $table->integer('payment_contact_id')->nullable();
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);

            $table->foreign('family_id')->references('id')->on('families')->onDelete('cascade'); 
            $table->foreign('first_contact_id')->references('id')->on('parents')->onDelete('cascade'); 


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('childrent');
    }
};
