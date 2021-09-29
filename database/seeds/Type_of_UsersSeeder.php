<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Type_of_UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_usuarios')->insert([
            'tu_tipo' => 'Empleado',
            'tu_descripcion' => 'Empleado',
        ]);
        DB::table('tipo_usuarios')->insert([
            'tu_tipo' => 'Pasante',
            'tu_descripcion' => 'Pasante',
        ]);
    }
}
