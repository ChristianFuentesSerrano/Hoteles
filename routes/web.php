<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HabitacionController;
use App\Http\Controllers\ReservacionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Check_inController;

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

Route::get('/', HomeController::class)->name('home');

Route::resource('habitacion', HabitacionController::class);
Route::resource('reservacion', ReservacionController::class);
Route::resource('user', UserController::class);
Route::resource('check_in', Check_inController::class);