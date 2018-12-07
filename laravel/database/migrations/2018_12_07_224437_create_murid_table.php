<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMuridsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('murid', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_lengkap');
            $table->string('gender', 1);
            $table->string('nama_panggilan');
            $table->string('nim');
            $table->string('kelas');
            $table->string('alamat')->nullable();
            $table->string('no_telepon')->nullable();
            $table->string('foto')->nullable();
            $table->integer('kelas_id')->unsigned();
            $table->timestamps();

            $table->foreign('kelas_id')->references('id')->on('kelas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('murid');
    }
}
