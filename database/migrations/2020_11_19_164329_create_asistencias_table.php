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
<<<<<<< HEAD
            $table->integer('asi_dep_id')->unsigned();
            $table->integer('asi_car_id')->unsigned();
            $table->time('asi_entrada');
            $table->time('asi_salida');
            $table->foreign('asi_dep_id')->references('dep_id')->on('departamentos')->onDelete('cascade');
            $table->foreign('asi_car_id')->references('car_id')->on('carnet_ingresos')->onDelete('cascade');
=======
            $table->integer('asi_dep_id');
            $table->integer('asi_car_id');
            $table->date('asi_fecha_entrada');
            $table->time('asi_entrada');
            $table->date('asi_fecha_salida')->nullable();
            $table->time('asi_salida')->nullable();
            $table->foreign('asi_dep_id')->references('dep_id')->on('departamentos');
            $table->foreign('asi_car_id')->references('car_id')->on('carnet_ingresos');
>>>>>>> version-developer-1.23
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
