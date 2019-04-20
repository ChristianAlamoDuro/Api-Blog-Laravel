<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
        // Indicamos la tabla
        protected $table = 'categories';

        // Inidcamos la relacion (hasMany) Relacion de uno a muchos 
        // Metodo que cuando creemos el objeto de categoria , podemos llamar al metodo post  
        // y nos permite devolver todos los post de esa categoria e
        public function posts()
        { 
            return $this->hasMany('App\Post');
        }
}
