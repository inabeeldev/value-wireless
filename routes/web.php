<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\batch\BatchController;
use App\Http\Controllers\supplier\SupplierController;
use App\Http\controllers\warehouse\WarehouseController;
use App\Http\controllers\device\DeviceController;
use App\Http\controllers\grade\GradeController;
use App\Http\Controllers\product\ProductController;

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
Route::get('/forget-sessions', [BatchController::class, 'forget'])->name('forget-sessions');
Route::resource('batch', BatchController::class);
Route::get('/batch-detail', [BatchController::class, 'batch_detail'])->name('batch-detail');
Route::post('/add-batch-device', [BatchController::class, 'addBatchDevice'])->name('add-batch-device');
Route::resource('supplier', SupplierController::class);
Route::resource('warehouse',WarehouseController::class);
Route::resource('device',DeviceController::class);
Route::resource('grade',GradeController::class);
Route::post('/new-devices', [ProductController::class, 'store'])->name('add-purchase-device');
Route::post('/imei', [ProductController::class, 'storeImei'])->name('add-imei');

