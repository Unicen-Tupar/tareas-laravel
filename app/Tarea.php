<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    protected $fillable = ['nombre', 'descripcion', 'category_id', 'hecho', 'user_id'];

    public function category(){
      return $this->belongsTo('App\Category');
    }

    public function user(){
      return $this->belongsTo('App\User');
    }

    public function tituloCompleto(){
        return $this->nombre . ' - by ' . $this->user->name;
    }
}
