<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCarnetIngresosToVisitantes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('visitantes', function (Blueprint $table){
            $table->integer('vi_car_id')->unsigned()->nullable()->after('vi_domicilio');
            $table->foreign('vi_car_id')->references('car_id')->on('carnet_ingresos')->onDelete('cascade');
        });
            
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
