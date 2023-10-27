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
        Schema::create('tahapan_applys', function (Blueprint $table) {
            $table->id();
            $table->integer('idapply');
            $table->integer('idtahapan');
            $table->integer('nilai');
            $table->date('tgl_update');
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
        Schema::dropIfExists('tahapan_apply');
    }
};
