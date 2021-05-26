<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            'us_nombre'   => 'Jesús Alejandro',
            'us_apellido' => 'Acevedo Meneses',
            'us_cedula'   => 27647120,
            'us_correo'   => 'jacevedom@vive.gob.ve',
            'us_user'     => 'jacevedom',
            'us_password' => bcrypt('27647120ale'),
            'us_estatus'  => 1,
            'us_photo'    => '27647120.png',
            'us_rol_id'   => 1,
            'us_tu_id'    => 1,
        ]);
    }
}
