<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // Datos que se pueden rellenar al hacer un insert , un update...
    protected $fillable = [
        'name', 'surname', 'description', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    // Campos que no se van a devolver en los array de la BBDD , son los datos 
    // que no se van a sacer de la BBDD
    protected $hidden = [
        'password', 'remember_token',
    ];

    // Inidcamos la relacion (hasMany) Relacion de uno a muchos 
    // Metodo que cuando creemos el objeto de categoria , podemos llamar al metodo post  
    // y nos permite devolver todos los post de ese usuario
    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
