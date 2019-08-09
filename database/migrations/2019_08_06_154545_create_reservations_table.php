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
            $table->unsignedInteger('users_id');
            $table->foreign('users_id')->references('id')
                ->on('users')->onDelete('cascade');
            $table->unsignedInteger('rooms_id');
            $table->foreign('rooms_id')->references('id')
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
