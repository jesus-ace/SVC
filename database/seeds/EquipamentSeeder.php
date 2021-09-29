<?php

use Illuminate\Database\Seeder;
use App\Equipo;

class EquipamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $equipaments=[
            [
                'eq_nombre' => 'dell optiplex',
                'eq_descripcion' => 'dell optiplex 3010', 
            ]
        ];
        foreach($equipaments as $equipament){
            Equipo::create($equipament);
        }
    }
}
