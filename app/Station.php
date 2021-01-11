<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Station extends Model
{

    protected $fillable = ['name', 'abreviacion', 'alias','address','idfire_departament'];

    public function firedepa()
    {
        return $this->hasone('App\fire_departament','id', 'idfire_departament');
    }

}
