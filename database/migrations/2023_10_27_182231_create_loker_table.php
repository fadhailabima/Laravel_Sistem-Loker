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
        Schema::create('lokers', function (Blueprint $table) {
            $table->id('idloker');
            $table->string('idperusahaan');
            $table->string('nama');
            $table->string('tipe');
            $table->integer('usia_min');
            $table->integer('usia_max');
            $table->integer('gaji_min');
            $table->integer('gaji_max');
            $table->string('nama_cp');
            $table->string('email_cp')->unique();
            $table->string('no_telp_cp');
            $table->date('tgl_update');
            $table->date('tgl_aktif');
            $table->date('tgl_tutup');
            $table->string('status');
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
        Schema::dropIfExists('loker');
    }
};
