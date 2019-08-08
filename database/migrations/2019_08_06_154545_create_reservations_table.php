<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('check_in');
            $table->dateTime('check_out')->nullable();
            $table->dateTime('reservation_date');
            $table->boolean('status')->default(true);
            $table->unsignedInteger('id_users');
            $table->foreign('id_users')->references('id')
                ->on('users')->onDelete('cascade');
            $table->unsignedInteger('id_rooms');
            $table->foreign('id_rooms')->references('id')
                ->on('rooms')->onDelete('cascade');
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
        Schema::dropIfExists('reservations');
    }
}
