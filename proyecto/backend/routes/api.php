<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsuariosController;

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

Route::get('/usuarios', [UsuariosController::class, 'index']); 

Route::post('/usuarios', [UsuariosController::class, 'store']);

Route::get('/usuarios/{id}', [UsuariosController::class, 'show']);

Route::put('/usuarios/{id}', [UsuariosController::class, 'update']);

Route::delete('/usuarios/{id}', [UsuariosController::class, 'destroy']);

Route::get('/usuarios/search/{user_name}', [UsuariosController::class, 'search']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
