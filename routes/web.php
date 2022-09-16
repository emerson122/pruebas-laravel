<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('Auth.login');
// });

Route::get('/',[SessionController::class,'crear'])->name('login'); //al colocar esto la persona que se intente saltar el login sera redirigida a esta ruta
Route::post('/',[SessionController::class,'buscar']);

Route::get('/register',[AuthController::class,'register'])->name('register'); //al colocar esto la persona que se intente saltar el login sera redirigida a esta ruta
Route::post('/register',[AuthController::class,'insertar']); //al colocar esto la persona que se intente saltar el login sera redirigida a esta ruta
Route::get('/vista1', function () {
    return view('vista1');
});


Route::get('/vista2', function () {
    return view('vista2');
});
