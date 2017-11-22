<?php


namespace App;

use Illuminate\Database\Eloquent\Model;


class Horario extends Model

{
    //
  protected $table = 'horarios';
  protected $primaryKey = 'id_horarios';
  protected $fillable = ['horarios'];

    public function forms(){

   		return $this->hasMany('App\Form','horarios');
   }

}
