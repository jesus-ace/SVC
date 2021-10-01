<?php

use Illuminate\Database\Seeder;

class asistenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('asistencias')->insert([
            'asi_dep_id'      => '1',
            'asi_car_id'      => '1',
            'asi_entrada'    => '01:53',
            'asi_salida'      => '02:53',
            'asi_fecha_entrada'   => '2021-09-29',
            'asi_fecha_salida'       => '2021-09-29',
        ]);
    }
}
