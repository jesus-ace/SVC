<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccesosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accesos', function (Blueprint $table) {
            $table->increments('acc_id');
            $table->integer('acc_us_id');
            $table->integer('acc_rol_id');
            $table->integer('acc_mod_id');
            $table->integer('acc_pan_id');
            $table->foreign('acc_us_id')->references('us_id')->on('usuarios');
            $table->foreign('acc_rol_id')->references('rol_id')->on('rols');
            $table->foreign('acc_mod_id')->references('mod_id')->on('modulos');
            $table->foreign('acc_pan_id')->references('pan_id')->on('pantallas');
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
        Schema::dropIfExists('accesos');
    }
}
