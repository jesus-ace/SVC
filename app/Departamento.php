<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    //
    protected $primaryKey = 'dep_id';
    
    protected $fillable = [
        'dep_nombre', 
        'dep_descripcion', 
        'dep_codigo', 
        'dep_tlf', 
        'dep_sec' 
    ];

    public function asistencias(){
        return $this->hasMany(asistencia::class, 'asi_id');
    }
}
