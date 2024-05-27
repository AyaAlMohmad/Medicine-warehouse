<?php

use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\CompanyController;
use App\Http\Controllers\FrontEnd\FavoriteController;
use App\Http\Controllers\Frontend\FrontController;
use App\Http\Controllers\FrontEnd\OrderController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\FrontEnd\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[FrontController::class, 'index'])->name('front');
Route::get('/about',[AboutController::class, 'index'])->name('about');
Route::get('/service',[ServiceController::class, 'index'])->name('service');
Route::get('/service/{id}',[ServiceController::class, 'show'])->name('service.show');
Route::get('/company',[CompanyController::class, 'index'])->name('company');
Route::get('/category/{id}',[ProductController::class, 'categoryproduct'])->name('category.product');
Route::get('/product/{id}',[ProductController::class, 'index'])->name('product');
Route::get('/productitem/{id}',[ProductController::class, 'show'])->name('product.show');
Route::delete('/favorit/{id}',[FavoriteController::class, 'destroy'])->middleware('auth')->name('favorit.destroy');
Route::post('/favorite/store',[FavoriteController::class,'store'])->name('favorite.store')->middleware('auth');
Route::get('/order',[UserController::class,'favorite'])->name('user.order')->middleware('auth');
Route::post('/order/store',[OrderController::class,'store'])->name('order.store')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
