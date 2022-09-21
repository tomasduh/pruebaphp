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

Route::get('/usuarios', [UserController::class, 'index'])->name('usuario');
Route::post('/crearusuario', [UserController::class, 'store'])->name('crearusuario');
Route::put('/actualizarusuario/{id}', [UserController::class, 'update'])->name('actualizarusuario');
Route::delete('/eliminarusuario/{id}', [UserController::class, 'destroy'])->name('eliminarrusuario');


Route::get('/bodegas', [BodegasController::class, 'index'])->name('bodega');
Route::post('/crearbodega', [BodegasController::class, 'store'])->name('crearbodega');
Route::put('/actualizarbodega/{id}', [BodegasController::class, 'update'])->name('actualizarbodega');
Route::delete('/eliminarusuario/{id}', [BodegasController::class, 'destroy'])->name('eliminarrbodega');
