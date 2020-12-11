<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class asistencia extends Model
{
    //
    protected $primaryKey = 'asi_id';

    protected $fillable = [
        'asi_dep_id', 'asi_car_id', 'asi_entrada', 'asi_salida',
    ];
}
