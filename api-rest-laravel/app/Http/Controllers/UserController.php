<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Función para probar si el controlador funciona 
    public function pruebas ( Request $request){
        return 'Accion de pruebas de USER-CONTROLLER';
    }

    // Registro de usuario

    public function register ( Request $request){
        $name = $request->input('name');
        $surname = $request->input('surname');

        return 'Accion de pruebas de USER REG <br>'. $name.' '. $surname;
    }

    // Login usuario
    public function login ( Request $request){
        return 'Accion de pruebas de USER LOG';
    }

}
