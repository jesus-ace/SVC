<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReasonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('motivos')->insert([
            'mt_motivo' => 'ENTREVISTA DE TRABAJO',
        ]);
        DB::table('motivos')->insert([
            'mt_motivo' => 'ENTREGA DE CURRICULUM',
        ]);
        DB::table('motivos')->insert([
            'mt_motivo' => 'VISITA GUIADA A LAS INSTALACIONES',
        ]);
        DB::table('motivos')->insert([
            'mt_motivo' => 'TRABAJADOR EXTERNO',
        ]);
    }
}
