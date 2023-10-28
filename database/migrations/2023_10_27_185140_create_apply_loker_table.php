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
        Schema::create('apply_lokers', function (Blueprint $table) {
            $table->id('idapply');
            $table->bigInteger('idloker')->unsigned();
            $table->bigInteger('noktp')->unsigned();
            $table->date('tgl_apply');
            $table->timestamps();
        });

        Schema::table('apply_lokers', function (Blueprint $table) {
         
            $table->foreign('idloker')->references('idloker')->on('lokers')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('apply_lokers', function (Blueprint $table) {
         
            $table->foreign('noktp')->references('noktp')->on('pencakers')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apply_loker');
    }
};
