<?php

use Illuminate\Database\Seeder;
use App\Visitante;

class VisitorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $visitors=[
            [
                'vi_nombre' => 'Jaun',
                'vi_apellido' => 'Garcia', 
                'vi_cedula' => '27030303', 
                'vi_telefono' => '04168150529', 
                'vi_domicilio' => 'en su cas', 
                'vi_car_id ' => '1', 
                'vi_responsable' => 'Jesus Acevedo', 
                'vi_mt_id' => '1', 
                'vi_eq_id' => '1', 
                'vi_photo' => "vis27030303",
            ],
            [
                'vi_nombre' => 'Jose',
                'vi_apellido' => 'Garcia', 
                'vi_cedula' => '27040404', 
                'vi_telefono' => '04168150529', 
                'vi_domicilio' => 'en su cas', 
                'vi_car_id ' => '2', 
                'vi_responsable' => 'Jesus Acevedo', 
                'vi_mt_id' => '1', 
                'vi_eq_id' => '1', 
                'vi_photo' => "vis27040404",
            ],
            [
                'vi_nombre' => 'Pedro',
                'vi_apellido' => 'Garcia', 
                'vi_cedula' => '27622022', 
                'vi_telefono' => '04168150529', 
                'vi_domicilio' => 'en su cas', 
                'vi_car_id ' => '3', 
                'vi_responsable' => 'Jesus Acevedo', 
                'vi_mt_id' => '1', 
                'vi_eq_id' => '1', 
                'vi_photo' => "vis27622022",
            ],
            [
                'vi_nombre' => 'Maria',
                'vi_apellido' => 'Garcia', 
                'vi_cedula' => '27647020', 
                'vi_telefono' => '04168150529', 
                'vi_domicilio' => 'en su cas', 
                'vi_car_id ' => '4', 
                'vi_responsable' => 'Jesus Acevedo', 
                'vi_mt_id' => '1', 
                'vi_eq_id' => '1', 
                'vi_photo' => "vis27647020",
            ],
            [
                'vi_nombre' => 'Josefa',
                'vi_apellido' => 'Garcia', 
                'vi_cedula' => '27647022', 
                'vi_telefono' => '04168150529', 
                'vi_domicilio' => 'en su cas', 
                'vi_car_id ' => '5', 
                'vi_responsable' => 'Jesus Acevedo', 
                'vi_mt_id' => '1', 
                'vi_eq_id' => '1', 
                'vi_photo' => "vis27647022",
            ],
        ];
        foreach($visitors as $visitor){
            Visitante::create($visitor);
        }

    }
}
