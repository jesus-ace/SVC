<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rol extends Model
{
    //
    protected $table = 'rols';
    protected $primaryKey = 'rol_id';

    public function usuarios()
    {
        return $this->hasMany(usuarios::class, 'us_rol_id');
    }
}
