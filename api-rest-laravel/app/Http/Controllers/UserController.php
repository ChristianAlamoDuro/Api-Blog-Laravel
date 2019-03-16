<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;

class UserController extends Controller
{
    // Función para probar si el controlador funciona 
    public function pruebas(Request $request)
    {
        return 'Accion de pruebas de USER-CONTROLLER';
    }

    // Registro de usuario

    public function register(Request $request)
    {
        // Recogemos los datos del usuario por POST
        // Los datos los recogemos en formato JSON
        $json = $request->input('json', null); // Si no me llega json el valor será nulo
        //Decodificamos el json
        $params = json_decode($json); // Objeto
        $params_array = json_decode($json, true); // Array

        // Validamos los datos
        //vLimpiamos los datos
        $params_array = array_map('trim', $params_array);
        // Usamos la libreria validator
        // Al método make le pasamos un array con los datos que queremos validar
        // Le pasamos un array con las validaciones que tiene que hacer
        $validate = Validator::make($params_array, [
            'name'      => 'required|alpha',
            'surname'  => 'required|alpha',
            'email'     => 'required|email|unique:users',
            'password' => 'required'
        ]);

        if ($validate->fails()) {
            // Si la validación falla
            $data = array(
                // Indicamos que la petición ha sido erronea 
                'status' => 'error',
                // Codigo de respuesta http
                'code' => '404',
                // mensaje 
                'message' => 'El usuario no se ha creado correctamente',
                // Errores
                'errors' => $validate->errors()
            );
        } else {
            // Si la validación es correcta 

            // Cifrar la contraseña
            // Cifraremos con el metodo password_hash
            // Le pasamos la contraseña
            // Le indicamos el algortimo de cifrado
            // Pasamos en una array la cantidad de veces que ciframos la contraseña
            $pwd = password_hash($params->password, PASSWORD_BCRYPT, ['cost' => 4]);

            // Comprobamos si el usuario esta registrado ya ( duplicado )
            // Usaremos la regla de validación unique se usa cuando verificamos los datos

            // Crear el usuario
            // Tenemos que incluir el modelo de usuario
            $user = new User();

            $user->name = $params_array['name'];
            $user->surname = $params_array['surname'];
            $user->email = $params_array['email'];
            $user->password = $pwd;
            


            $data = array(
                // Indicamos que la petición ha sido erronea 
                'status' => 'success',
                // Codigo de respuesta http
                'code' => '200',
                // mensaje 
                'message' => 'El usuario se ha creado correctamente'
            );
            // Guardar el usuario
            $user->save();
        }



        // Devolvemos el array en formato JSON, el primer parametro será el array 
        // el segundo parametro sera el codigo http
        return response()->json($data, $data['code']);
    }

    // Login usuario
    public function login(Request $request)
    {
        return 'Accion de pruebas de USER LOG';
    }
}
