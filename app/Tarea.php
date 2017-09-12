<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    protected $fillable = ['nombre', 'descripcion', 'category_id', 'hecho', 'user_id'];

    public function category(){
      return $this->belongsTo('App\Category');

    }
}
