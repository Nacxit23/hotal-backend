<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('year_old');
            $table->string('nationality');
            $table->string('gender');
            $table->unsignedInteger('id_dni_category')->nullable();
            $table->foreign('id_dni_category')->references('id')->on('dni_categories')->onDelete('cascade');
            $table->unsignedInteger('id_creditCards');
            $table->foreign('id_creditCards')->references('id')->on('credit_cards')->onDelete('cascade');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('name')->virtualAs('CONCAT(first_name, " ", last_name)');
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
