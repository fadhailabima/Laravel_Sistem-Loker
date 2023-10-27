<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pencakers', function (Blueprint $table) {
            $table->id('noktp');
            $table->string('nama')->nullable();
            $table->string('password');
            $table->string('jenis_kelamin')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('alamat')->nullable();
            $table->string('kota')->nullable();
            $table->string('email')->unique();
            $table->string('no_telp')->nullable();
            $table->binary('foto')->nullable();
            $table->date('tgl_daftar')->nullable();
            $table->binary('file_ktp')->nullable();
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
        Schema::dropIfExists('pencaker');
    }
};
