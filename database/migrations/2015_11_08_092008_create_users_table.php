<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wellets', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('ammount')->default(0.00);
        $table->timestamps();
        $table->foreign('id')
        ->references('id')->on('users')
        ->onDelete('cascade');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('wellets');
    }
}
