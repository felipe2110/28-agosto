<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductssController;

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


Route::get('products',[ProductssController::class,'index'])->name('products.index');
Route::get('products/create',[userController::class,'create'])->name('products.create');