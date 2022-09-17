<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    
    public function register(){
        return view('auth.register');
    }
   public function insertar(Request $request)
   {
    // entre comillas de los varchar
    $usuario = $_POST['user'];
    $user = "'$usuario'";

    $nombre = $_POST['name'];
    $name = "'$nombre'";
    // encriptar contrasena
    $contra = md5($request->pass);
    $pass = "'$contra'";

    // dump(' |NOMBRE:'.$user." |USUARIO: ".$name." |CONTRASENA: ".$pass);
    $insertarUsuario= Http::post('http://localhost:3000/usuarios/registrar',[    
        "user" =>$user,
        "nombre"=> $name,
        "pass" =>$pass,
    ]);
    // dump(' |NOMBRE:'.$request->name." |USUARIO: ".$request->user." |CONTRASENA: ".$pass);
   }
}
