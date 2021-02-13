<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\SubstockController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\InputController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\OutputController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Nr:ow create something great!
|
*/

Route::resource('/Category',CategoryController::class);
Route::resource('/Stock',StockController::class);
Route::resource('/Sub_Stock',SubstockController::class);
Route::resource('/Warehouse',WarehouseController::class);
Route::resource('/product',ProductController::class);
Route::resource('/Supplier',SupplierController::class);
Route::resource('/Input',InputController::class);
Route::resource('/Transaction',TransactionController::class);
Route::resource('/Output',OutputController::class);

// // Route::get('Template', function () {
// //    return View::make('Template');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
