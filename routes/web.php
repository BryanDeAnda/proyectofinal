<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StockController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('stocks', StockController::class);

Route::resource('employees', EmployeeController::class);

//Route::view('/employees', "employees")->middleware('auth')->name('employees');
//Route::view('/employees/create', "cremp")->middleware('auth')->name('cremp');

Route::view('/login', "login")->name('login');
Route::view('/registro', "register")->name('registro');

Route::post('/validar-registro',[LoginController::class, 'register'])->
    name('validar-registro');
Route::post('/inicia-sesion',[LoginController::class, 'login'])
    ->name('inicia-sesion');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');