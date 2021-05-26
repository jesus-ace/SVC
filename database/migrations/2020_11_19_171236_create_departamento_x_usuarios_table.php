<?php

use App\usuarios;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartamentoXUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departamento_x_usuarios', function (Blueprint $table) {
            $table->increments('dxu_id');
<<<<<<< HEAD
            $table->integer('dxu_us_id')->unsigned();
            $table->integer('dxu_dep_id')->unsigned();
            $table->integer('dxu_dep_estatus');
            $table->foreign('dxu_us_id')->references('us_id')->on('usuarios')->onDelete('cascade');
            $table->foreign('dxu_dep_id')->references('dep_id')->on('departamentos')->onDelete('cascade');
=======
            $table->integer('dxu_us_id');
            $table->integer('dxu_dep_id');
            $table->integer('dxu_dep_estatus');
            $table->foreign('dxu_us_id')->references('us_id')->on('usuarios');
            $table->foreign('dxu_dep_id')->references('dep_id')->on('departamentos');
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
        Schema::dropIfExists('departamento_x_usuarios');
    }
}
