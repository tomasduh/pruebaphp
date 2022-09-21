<?php

use App\Http\Controllers\UserController;
use App\Models\User;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/usuarios', [UserController::class, 'index'])->name('usuario');
Route::post('/crearusuario', [UserController::class, 'store'])->name('crearusuario');
Route::put('/actualizarusuario', [UserController::class, 'update'])->name('actualizarusuario');
Route::delete('/actualizarusuario', [UserController::class, 'destroy'])->name('eliminarrusuario');

