<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class emergency_code extends Model
{
    protected $fillable = [
        'code','description','voceo_clave'
    ];
}
