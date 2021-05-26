<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class auditoria extends Model
{
    protected $fillable = [
        'au_maquina', 
        'au_so', 
        'au_navegador', 
        'au_us_id', 
        'au_fecha'
    ];
    
    public function User()
    {
        return $this->belongsTo('App\usuarios');
    }

}
