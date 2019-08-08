<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('check_details', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_reservations');
            $table->foreign('id_reservations')->references('id')->on('reservations')->onDelete('cascade');
            $table->integer('total');
            $table->integer('tax');
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
        Schema::dropIfExists('checkDetails');
    }
}
