<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUjiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ujians', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('tipe_ujian_id')->unsigned();
            $table->integer('passgrade');
            $table->dateTime('dateandtime');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            // $table->foreign('tipe_ujian_id')->references('id')->on('tipe_ujians');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ujians');
    }
}
