<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HabitacionController;
use App\Http\Controllers\ReservacionController;
use App\Http\Controllers\Check_inController;

//Role controllers
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function(){
    return view('inicio');
})->name('inicio');
Route::get('info', function(){
    return view('acercade');
})->name('acerca_de');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('habitaciones_disponibles', [ReservacionController::class, 'index_habitaciones'])->name('reservaciones.habitaciones_disponibles');
Route::get('reservaciones', [ReservacionController::class, 'create'])->name('reservaciones.create');
Route::post('reservaciones', [ReservacionController::class, 'store'])->name('reservaciones.store');

Route::group(['middleware' => ['auth']], function(){
    Route::resource('roles', RolController::class);
    Route::resource('usuarios', UsuarioController::class);
    Route::resource('habitaciones', HabitacionController::class);
    Route::resource('reservaciones', ReservacionController::class);
    Route::resource('check_ins', Check_inController::class);
});