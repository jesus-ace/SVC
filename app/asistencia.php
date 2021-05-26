<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class asistencia extends Model
{
    //
    protected $primaryKey = 'asi_id';

    protected $fillable = [
<<<<<<< HEAD
        'asi_dep_id', 'asi_car_id', 'asi_entrada', 'asi_salida', 'created_at', 
=======
        'asi_dep_id', 
        'asi_car_id', 
        'asi_entrada', 
        'asi_salida', 
        'asi_fecha_entrada', 
        'asi_fecha_salida', 
>>>>>>> version-developer-1.23
    ];
}
