<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class visitante extends Model
{
    //
    protected $primaryKey = 'vi_id';

    protected $fillable = [
        'vi_nombre', 'vi_apellido', 'vi_cedula', 'vi_telefono', 'vi_domicilio', 'vi_car_id ', 'vi_responsable', 'vi_mt_id', 'vi_eq_id', 'vi_photo', 'created_at', 'updated_at',
    ];
    

}
