<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class usuarios extends Authenticatable
{
    use Notifiable;
    protected $table = 'usuarios';
    protected $primaryKey = 'us_id';

    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'us_nombre', 'us_apellido', 'us_cedula', 'us_user', 'us_correo', 'us_password', 'us_estatus',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
     protected $hidden = [
        'us_password', 'remember_token',
    ];

    public function getAuthPassword(){
        return $this->us_password;
    }

    public function rol(){
<<<<<<< HEAD
        return $this->hasMany('App\rol');
    }
    
    public function auditoria()
    {
        return $this->hasMany('App\auditoria');
    }

=======
        return $this->belongsTo('App\rol');
    }
>>>>>>> version-developer-1.23

}
