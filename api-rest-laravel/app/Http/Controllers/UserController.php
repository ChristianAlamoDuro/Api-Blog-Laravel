<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Función para probar si el controlador funciona 
    public function pruebas ( Request $request){
        return 'Accion de pruebas de USER-CONTROLLER';
    }
}
