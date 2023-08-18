<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\batch\BatchController;
use App\Http\Controllers\supplier\SupplierController;
use App\Http\controllers\warehouse\WarehouseController;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('batch', BatchController::class);
Route::resource('supplier', SupplierController::class);
Route::resource('warehouse',WarehouseController::class);
