<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    //
    protected $primaryKey = 'asi_id';

    protected $fillable = [
        'asi_dep_id', 
        'asi_car_id', 
        'asi_entrada', 
        'asi_salida', 
        'asi_fecha_entrada', 
        'asi_fecha_salida', 
    ];

    public function departamentos(){
        return $this->belongsTo(departamento::class, 'asi_dep_id', 'dep_id');
    }

    public function carnetIngresos(){
        return $this->belongsTo(carnetIngreso::class, 'asi_car_id', 'car_id');
    }
}

