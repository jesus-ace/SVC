<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class equipo extends Model
{
    //
    protected $table = 'equipos';
    protected $primaryKey = 'eq_id';

    protected $fillable = [
        'eq_nombre', 'eq_descripcion', 'eq_id',
    ];

    public function equipament(){
        return $this->hasOne(Visitante::class);
    }
}
