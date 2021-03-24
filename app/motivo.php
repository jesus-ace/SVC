<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class motivo extends Model
{
    protected $primaryKey = 'mt_id';
    
    protected $fillable = [
        'mt_motivo', 'mt_otros',
    ];
}
