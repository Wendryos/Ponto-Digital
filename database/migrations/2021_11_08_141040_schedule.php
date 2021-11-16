<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Schedule extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     Schema::create('schedules', function (Blueprint $table) {
        $table->id();
        $table->string('usuario');
        $table->string('data_registro')->unique();
        $table->string('primeira_entrada');
        $table->string('primeira_saida');
        $table->string('segunda_entrada');
        $table->string('segunda_saida');
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
        Schema::dropIfExists('schedules');
    }
}
