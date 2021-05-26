<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class auditoria extends Model
{
<<<<<<< HEAD
    protected $fillable = [
=======
    protected $table = 'auditorias';
    protected $primaryKey = 'au_id';

    protected $fillable = [
        'au_ip_maquina',
>>>>>>> version-developer-1.23
        'au_maquina', 
        'au_so', 
        'au_navegador', 
        'au_us_id', 
<<<<<<< HEAD
        'au_fecha'
    ];
    
    public function User()
    {
        return $this->belongsTo('App\usuarios');
    }

=======
        'au_tipo',
        'au_fecha',
        
    ];
>>>>>>> version-developer-1.23
}
