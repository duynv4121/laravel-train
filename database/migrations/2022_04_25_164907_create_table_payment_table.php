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
        Schema::create('payment', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_parent')->unsigned();
            $table->string('detail_below')->nullable();
            $table->string('payment_bill')->nullable();
            $table->string('attention')->nullable();
            $table->string('building_address')->nullable();
            $table->string('billing_email_address')->nullable();
            $table->string('company_name')->nullable();
            $table->timestamps();

            $table->foreign('id_parent')->references('id')->on('parents');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment');
    }
};
