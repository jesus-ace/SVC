<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class visitante extends Model
{
    //
    protected $table = 'visitantes';
    protected $primaryKey = 'vi_id';

    protected $fillable = [
        'vi_nombre', 
        'vi_apellido', 
        'vi_cedula', 
        'vi_telefono', 
        'vi_domicilio', 
        'vi_car_id ', 
        'vi_responsable', 
        'vi_mt_id', 
        'vi_eq_id', 
        'vi_photo', 
    ];
    
    public function carnet_ingresos()
    {
        return $this->belongsTo(carnet_ingreso::class, 'vi_car_id ', 'car_id ');
    }

    public function motivos()
    {
        return $this->belongsTo(Motivo::class, 'vi_mt_id', 'mt_id' );
    }

    public function equipos()
    {
        return $this->belongsTo(Equipo::class, 'vi_eq_id', 'eq_id' );
    }
}
