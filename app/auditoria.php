<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class auditoria extends Model
{
    protected $table = 'auditorias';
    protected $primaryKey = 'au_id';

    protected $fillable = [
        'au_ip_maquina',
        'au_maquina', 
        'au_so', 
        'au_navegador', 
        'au_us_id', 
        'au_tipo',
        'au_fecha',
        
    ];
}
