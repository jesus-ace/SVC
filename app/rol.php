<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rol extends Model
{
    //
    protected $table = 'rols';
    protected $primaryKey = 'rol_id';

    /*public function user()
    {
        return $this->belongsTo('App\usuarios');
    }*/
}
