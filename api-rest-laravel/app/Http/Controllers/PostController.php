<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    // Función para probar si el controlador funciona 
    // Objeto $request que es de tipo Request contendra toda la petición que llegue
    // desde la petición http
    public function pruebas ( Request $request){
        return 'Accion de pruebas de POST-CONTROLLER';
    }
}
