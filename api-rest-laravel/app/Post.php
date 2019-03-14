<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // tabla

    protected $table = 'posts';

    // indicamos la relacion Relacion de muchos a uno 

    public function user (){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function category (){
        return $this->belongsTo('App\Category', 'category_id');
    }
}
