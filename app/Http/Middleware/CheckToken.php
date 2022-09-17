<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class CheckToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        $token = session('Token');

       
        $validar = Http::post('http://localhost:3000/check',[    
            "token"=>$token
        ]);
        $validarArreglo =  $validar->json();
        

         
        if( $validarArreglo != null){ 
            return $next($request);
        }else {
            return redirect('/no-autorizado');
        }
    }
}
