<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsistenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistencias', function (Blueprint $table) {
            $table->increments('asi_id');
            $table->integer('asi_dep_id')->unsigned();
            $table->integer('asi_car_id')->unsigned();
            $table->time('asi_entrada');
            $table->time('asi_salida');
            $table->foreign('asi_dep_id')->references('dep_id')->on('departamentos')->onDelete('cascade');
            $table->foreign('asi_car_id')->references('car_id')->on('carnet_ingresos')->onDelete('cascade');
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
        Schema::dropIfExists('asistencias');
    }
}
