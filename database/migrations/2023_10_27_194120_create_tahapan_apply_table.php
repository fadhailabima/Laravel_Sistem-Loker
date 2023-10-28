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
        Schema::create('tahapan_applies', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idapply')->unsigned();
            $table->bigInteger('idtahapan')->unsigned();
            $table->integer('nilai');
            $table->date('tgl_update');
            $table->timestamps();
        });

        Schema::table('tahapan_applies', function (Blueprint $table) {
         
            $table->foreign('idapply')->references('idapply')->on('apply_lokers')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('tahapan_applies', function (Blueprint $table) {
         
            $table->foreign('idtahapan')->references('idtahapan')->on('tahapans')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tahapan_apply');
    }
};
