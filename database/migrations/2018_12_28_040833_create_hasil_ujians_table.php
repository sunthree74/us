<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHasilUjiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasil_ujians', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('ujian_id')->unsigned();
            $table->integer('tipe_ujian_id')->unsigned();
            $table->integer('nilai');
            $table->integer('jumlah_benar');
            $table->integer('jumlah_salah');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('ujian_id')->references('id')->on('ujians');
            $table->foreign('tipe_ujian_id')->references('id')->on('tipe_ujians');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('hasil_ujians');
    }
}
