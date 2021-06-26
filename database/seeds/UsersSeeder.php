<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\usuarios;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users=[
            [
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
            ],
            [
                'us_nombre'   => 'Javier',
                'us_apellido' => 'Prada',
                'us_cedula'   => 27647127,
                'us_correo'   => 'pjavier@vive.gob.ve',
                'us_user'     => 'pjavier',
                'us_password' => bcrypt('123456'),
                'us_estatus'  => 1,
                'us_photo'    => '27647127.png',
                'us_rol_id'   => 2,
                'us_tu_id'    => 1,
            ],
            [
                'us_nombre'   => 'Mauel',
                'us_apellido' => 'Leon',
                'us_cedula'   => 27647125,
                'us_correo'   => 'mleon@vive.gob.ve',
                'us_user'     => 'mleon',
                'us_password' => bcrypt('123456'),
                'us_estatus'  => 1,
                'us_photo'    => '27647125.png',
                'us_rol_id'   => 2,
                'us_tu_id'    => 1,
            ],
            [
                'us_nombre'   => 'Pedro',
                'us_apellido' => 'Gutierrez',
                'us_cedula'   => 27647126,
                'us_correo'   => 'gpedro@vive.gob.ve',
                'us_user'     => 'gpedro',
                'us_password' => bcrypt('123456'),
                'us_estatus'  => 1,
                'us_photo'    => '27647126.png',
                'us_rol_id'   => 2,
                'us_tu_id'    => 1,
            ],
            [
                'us_nombre'   => 'Jose',
                'us_apellido' => 'Gutierrez',
                'us_cedula'   => 27647130,
                'us_correo'   => 'gjose@vive.gob.ve',
                'us_user'     => 'gjose',
                'us_password' => bcrypt('123456'),
                'us_estatus'  => 1,
                'us_photo'    => '27647127.png',
                'us_rol_id'   => 2,
                'us_tu_id'    => 1,
            ],
            [
                'us_nombre'   => 'Jorge',
                'us_apellido' => 'Leal',
                'us_cedula'   => 27647128,
                'us_correo'   => 'ljorge@vive.gob.ve',
                'us_user'     => 'ljorge',
                'us_password' => bcrypt('123456'),
                'us_estatus'  => 1,
                'us_photo'    => '27647128.png',
                'us_rol_id'   => 2,
                'us_tu_id'    => 1,
            ],
        ];
        foreach($users as $user){
            usuarios::create($user);
        }

    }
}
