<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rol extends Model
{
    //
    public function user()
{
    //return $this->belongsTo(User::class);
    return $this->belongsTo('App\usuarios');
}
}
