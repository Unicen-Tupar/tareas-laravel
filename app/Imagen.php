<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    protected $table = 'imagenes';

    protected $fillable = ['tarea_id','path'];

    public function tarea(){
      return $this->belongsTo('App\Tarea');
    }
}
