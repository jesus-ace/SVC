<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuditoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auditorias', function (Blueprint $table) {
            $table->increments('au_id');
<<<<<<< HEAD
            $table->string('au_maquina');
            $table->string('au_so');
            $table->string('au_navegador');
            $table->integer('au_us_id')->unsigned();
            $table->date('au_fecha');
            $table->foreign('au_us_id')->references('us_id')->on('usuarios')->onDelete('cascade');
=======
            $table->string('au_ip_maquina');
            $table->string('au_maquina');
            $table->string('au_so');
            $table->string('au_navegador');
            $table->integer('au_us_id');
            $table->string('au_tipo'); 
            $table->date('au_fecha');
            $table->foreign('au_us_id')->references('us_id')->on('usuarios');
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
        Schema::dropIfExists('auditorias');
    }
}
