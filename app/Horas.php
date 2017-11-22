<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horas extends Model
{
    //
  protected $table = 'horas';

  public function fecha()
  {
	return $this->belongsTo('App\Fechas', 'id_fecha');
  }
}

