<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soal', function (Blueprint $table) {
            $table->id();
            $table->string('nomor');
            $table->string('id_pelajaran');
            $table->foreign('id_pelajaran')->references('id_pelajaran')->on('pelajaran');
            $table->text('soal');
            $table->string('soal_gambar')->nullable();
            $table->string('A_id');
            $table->text('A_jawaban');
            $table->string('A_jawaban_gambar')->nullable();
            $table->string('B_id');
            $table->text('B_jawaban');
            $table->string('B_jawaban_gambar')->nullable();
            $table->string('C_id');
            $table->text('C_jawaban');
            $table->string('C_jawaban_gambar')->nullable();
            $table->string('D_id');
            $table->text('D_jawaban');
            $table->string('D_jawaban_gambar')->nullable();
            $table->string('E_id');
            $table->text('E_jawaban');
            $table->string('E_jawaban_gambar')->nullable();
            $table->string('kunci_jawaban');
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
        Schema::dropIfExists('soal');
    }
}
