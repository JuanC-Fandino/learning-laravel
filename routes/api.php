<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorClientes;

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

Route::get('/clientes', [ControladorClientes::class, 'index']);
Route::post('/clientes', [ControladorClientes::class, 'store']);
Route::get('/clientes/{id}', [ControladorClientes::class, 'show']);
Route::get('/clientes/findById/{id}/{nombre}', [ControladorClientes::class, 'FindByNameAndId']);
