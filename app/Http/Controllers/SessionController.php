<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Spatie\LaravelIgnition\Recorders\DumpRecorder\Dump;

class SessionController extends Controller
{
    public function crear(){
        return view('auth.login');
    }



    public function buscar(){
        $usuario = $_POST['usuario'];
        $user = "'$usuario'";
        $contrasinencriptar =  $_POST['contra'];
        $contra = md5($contrasinencriptar);
        $pass = "'$contra'";  
    
        $validar = Http::post('http://localhost:3000/login',[    
            "user" =>$user,
            "pass" =>$pass,
        ]);
        $validarArreglo =  $validar->json();

        if($validarArreglo != null){
            Dump($validarArreglo);
        }else{
            Session::flash('NOregistrado','USUARIO O CONTRASEÑA INCORRECTOS');   
            return back();   
        }
  
        // $i=0;
        // while ($i <= sizeof($validarArreglo) - 1) {
           
        
        // }  
       
        
    }

  
}
