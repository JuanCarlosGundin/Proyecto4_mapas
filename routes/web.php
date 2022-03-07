<?php

use App\Http\Controllers\MapaController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

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

//Vista mapa temporal
Route::get('mapa',[MapaController::class,'mapa']);
Route::post('mostrarmapas',[MapaController::class,'mostrarmapas']);

//Login
Route::get('/login',[UsuarioController::class, 'login']);
Route::post('loginPost',[UsuarioController::class,'loginPost']);
