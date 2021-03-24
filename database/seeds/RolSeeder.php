<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rols')->insert([
            'rol_tipo' => 'Admin',
            'rol_descripcion' => 'Administra el sistema',
        ]);
        DB::table('rols')->insert([
            'rol_tipo' => 'Cliente',
            'rol_descripcion' => 'Registra a los visitantes',
        ]);
    }
}
