<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\AdminsController;
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

// Route::get('/',[HomeController::class , 'index'] ) ->name('home.index');
Route::get('/',[ProductsController::class ,'index']) ->name('home.index');
Route::get('/about',[HomeController::class , 'about']) -> name('home.about');
Route::get('/contact', [HomeController::class , 'contact']) -> name('home.contact');
Route::get('/AL',[HomeController::class,'adminLanding'])->name('admin.landing');
Route::get('/Thanks',[HomeController::class,'orderResponse'])->name('response.thanks');
Route::get('/ContactSent',[HomeController::class,'contactResponse'])->name('contact.thanks');
// Route::get('/order/{id?}',[OrdersController::class , 'show']) ->name('home.order');
// Route::get('/order/index',[OrdersController::class , 'index']) ->name('show.order');


Route::resource('product', ProductsController::class);
Route::resource('order',OrdersController::class);
Route::resource('admin',AdminsController::class);
