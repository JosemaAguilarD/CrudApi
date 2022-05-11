<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//obtener usuarios
Route::get('/usuarios', 'App\Http\Controllers\UsuarioController@index');
//registrar usuarios
Route::post('/usuarios', 'App\Http\Controllers\UsuarioController@store');
//actualizar usuarios
Route::put('/usuarios/{id}', 'App\Http\Controllers\UsuarioController@update');
//eliminar usuarios
Route::delete('/usuarios/{id}', 'App\Http\Controllers\UsuarioController@destroy');