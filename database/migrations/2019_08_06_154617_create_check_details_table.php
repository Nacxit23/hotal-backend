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
        Schema::create('checkDetails', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('reservations_id');
            $table->foreign('reservations_id')->references('id')->on('reservations')->onDelete('cascade');
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
