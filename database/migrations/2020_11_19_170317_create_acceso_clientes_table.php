<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccesoClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acceso_clientes', function (Blueprint $table) {
            $table->increments('acl_id');
            $table->string('acl_ip');
            $table->string('acl_descripcion');
            $table->integer('acl_us_id')->unsigned();
            $table->integer('acl_estatus');
            $table->string('acl_pantalla');
            $table->foreign('acl_us_id')->references('us_id')->on('usuarios')->onDelete('cascade');
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
        Schema::dropIfExists('acceso_clientes');
    }
}
