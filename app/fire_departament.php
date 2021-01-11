<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fire_departament extends Model
{
    protected $fillable = [
        'name','fundacion','logo'
    ];

  public function station ()
  {
      return $this->belongsTo('app\Station','id','idfire_departament');
  }
}


