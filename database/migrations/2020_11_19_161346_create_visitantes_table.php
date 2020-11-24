<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitantes', function (Blueprint $table) {
            $table->increments('vi_id');
            $table->string('vi_nombre');
            $table->string('vi_apellido');
            $table->integer('vi_cedula')->unique();
            $table->string('vi_telefono');
            $table->string('vi_domicilio');
            $table->string('vi_responsable');
            $table->integer('vi_mt_id');
            $table->integer('vi_eq_id', null);
            $table->foreign('vi_mt_id')->references('mt_id')->on('motivos');
            $table->foreign('vi_eq_id')->references('eq_id')->on('equipos');
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
        Schema::dropIfExists('visitantes');
    }
}
