<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
   protected $table = 'orfeo';


   public function horas(){
  
  return $this->belongsTo('App\Horas','hora');

   }

}



