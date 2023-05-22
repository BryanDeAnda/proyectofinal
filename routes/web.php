<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StockController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\StoreStockController;

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

Route::resource('employees', EmployeeController::class);
Route::resource('stocks', StockController::class);
Route::resource('stores', StoreController::class);
Route::resource('storestocks', StoreStockController::class);


#Route::middleware([
#    'auth:sanctum',
#    config('jetstream.auth_session'),
#    'verified'
#])->group(function () {
#    });

Route::get('/dashboard', function () {
    return view('stores');
})->middleware(['auth', 'verified'])->name('dashboard');

#require __DIR__.'/auth.php';
