<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('us_id');
            $table->string('us_nombre');
            $table->string('us_apellido');
            $table->integer('us_cedula')->unique();
            $table->integer('us_dep_id');
            $table->string('us_correo')->unique();
            $table->string('us_user')->unique();
            $table->string('us_pasword');
            $table->string('us_photo');
            $table->integer('us_rol_id');
            $table->integer('us_tu_id');
            $table->foreign('us_rol_id')->references('rol_id')->on('rols');
            $table->foreign('us_tu_id')->references('tu_id')->on('tipo_usuarios');
            $table->foreign('us_dep_id')->references('dep_id')->on('departamentos');
            $table->rememberToken();
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
        Schema::dropIfExists('usuarios');
    }
}
