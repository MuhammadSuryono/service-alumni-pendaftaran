<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnggotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumni_anggota', function (Blueprint $table) {
            $table->id();
            $table->string('nama_awal');
            $table->string('nama_akhir');
            $table->string('email')->unique();
            $table->string('no_seluler');
            $table->longText('alamat');
            $table->integer('id_angkatan');
            $table->boolean('setuju_tata_tertib');
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
        Schema::dropIfExists('anggota');
    }
}
