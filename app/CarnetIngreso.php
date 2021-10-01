<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarnetIngreso extends Model
{
    //
    protected $table = 'carnet_ingresos';
    protected $primaryKey = 'car_id';

    public function visitantes(){
        return $this->hasMany(Visitante::class, 'vi_id');
    }

    public function asistencias(){
        return $this->hasMany(Asistencia::class, 'asi_id');
    }
}
