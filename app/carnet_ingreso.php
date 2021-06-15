<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class carnet_ingreso extends Model
{
    //
    protected $table = 'carnet_ingresos';
    protected $primaryKey = 'car_id';

    public function visitantes(){
        return $this->hasOne(Visitante::class, 'vi_car_id');
    }
}
