<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motivo extends Model
{
    protected $primaryKey = 'mt_id';
    
    protected $fillable = [
        'mt_motivo', 'mt_otros',
    ];

    public function visitantes(){
        return $this->hasOne(Visitante::class, 'vi_mt_id');
    }
}
