<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    //
    protected $table = 'equipos';
    protected $primaryKey = 'eq_id';

    protected $fillable = [
        'eq_nombre', 
        'eq_descripcion',
    ];

    public function visitantes(){
        return $this->hasOne(Visitante::class, 'vi_eq_id');
    }
}
