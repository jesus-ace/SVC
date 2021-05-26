<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarnetIngresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carnet_ingresos', function (Blueprint $table) {
            $table->increments('car_id');
            $table->string('car_descripcion');
<<<<<<< HEAD
=======
            $table->boolean('car_status');
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
        Schema::dropIfExists('carnet_ingresos');
    }
}
