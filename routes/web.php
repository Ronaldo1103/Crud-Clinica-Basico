<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\medicoController;
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
    return view('auth.login');
});
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
//Route::get('/cita', [CitaController::class, 'index'])->name('citas.index');
Route::resource('cita', CitaController::class);
//Route::get('/lista', [medicoController::class, 'index'])->name('lista.index');
Route::resource('lista', MedicoController::class);