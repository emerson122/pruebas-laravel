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



    public function buscar(Request $request){
        // informacion sobre las sesiones https://www.youtube.com/watch?v=kJLv0chFd5k
        $user = "'$request->usuario'";
        $contrasinencriptar =  $request->contra;
        $contra = md5($contrasinencriptar);
        $pass = "'$contra'";  
    
        $validar = Http::post('http://localhost:3000/login',[    
            "user" =>$user,
            "pass" =>$pass,
        ]);
        $validarArreglo =  $validar->json();

        if($validarArreglo != null){
            
            // dump($validarArreglo['token']);
            $request->session()->put(['Usuario'=>$request->usuario]); //comprobar con la tabla de rol y dependiendo el rol que tenga se intera con un condiconante if
            $request->session()->put(['Token'=>$validarArreglo['token']]);

            return redirect()->route('pagina1');
            // return $request->session()->all();
            //cerrar sesion 
            // return $request->session()->forget('Usuario');
        }else{
            Session::flash('NOregistrado','USUARIO O CONTRASEÑA INCORRECTOS');   
            return back();   
        }
       
        
    }

  
}
