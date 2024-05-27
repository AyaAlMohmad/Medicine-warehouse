<?php

use App\Http\Controllers\Dashboard\AboutController;
use App\Http\Controllers\Dashboard\AdditionController;
use App\Http\Controllers\Dashboard\CategoryController;


use App\Http\Controllers\Dashboard\CompanyController;
use App\Http\Controllers\Dashboard\ContactController;
use App\Http\Controllers\Dashboard\DashController;

use App\Http\Controllers\Dashboard\OrderController;
use App\Http\Controllers\Dashboard\ProductController;
use App\Http\Controllers\Dashboard\ServiceController;
use App\Http\Controllers\Dashboard\SocialController;


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
// Auth::routes();
Route::prefix('dash/')->middleware('auth')->group(function () {
    Route::get('/', [DashController::class, 'index'])->name('dash.index');


    Route::resource('companies', CompanyController::class);
    Route::get('Softcompanies', [CompanyController::class, 'recycleBin'])->name('companies.soft');
    Route::get('company/finldelete/{id}', [CompanyController::class, 'finalDelete'])->name('companies.finaldelete');
    Route::get('company/restore/{id}', [CompanyController::class, 'restore'])->name('companies.restore');

    Route::resource('categories', CategoryController::class);
    Route::get('Softcategories', [CategoryController::class, 'recycleBin'])->name('categories.soft');
    Route::get('category/finldelete/{id}', [CategoryController::class, 'finalDelete'])->name('categories.finaldelete');
    Route::get('category/restore/{id}', [CategoryController::class, 'restore'])->name('categories.restore');



    Route::resource('abouts', AboutController::class);
    Route::get('SoftAbouts', [AboutController::class, 'recycleBin'])->name('abouts.soft');
    Route::get('about/finldelete/{id}', [AboutController::class, 'finalDelete'])->name('abouts.finaldelete');
    Route::get('about/restore/{id}', [AboutController::class, 'restore'])->name('abouts.restore');


    Route::resource('contacts', ContactController::class);
    Route::get('Softcontacts', [ContactController::class, 'recycleBin'])->name('contacts.soft');
    Route::get('contact/finldelete/{id}', [ContactController::class, 'finalDelete'])->name('contacts.finaldelete');
    Route::get('contact/restore/{id}', [ContactController::class, 'restore'])->name('contacts.restore');


    Route::resource('socials', SocialController::class);
    Route::get('Softsocials', [SocialController::class, 'recycleBin'])->name('socials.soft');
    Route::get('social/finldelete/{id}', [SocialController::class, 'finalDelete'])->name('socials.finaldelete');
    Route::get('social/restore/{id}', [SocialController::class, 'restore'])->name('socials.restore');

    Route::resource('services', ServiceController::class);
    Route::get('Softservices', [ServiceController::class, 'recycleBin'])->name('services.soft');
    Route::get('service/finldelete/{id}', [ServiceController::class, 'finalDelete'])->name('services.finaldelete');
    Route::get('service/restore/{id}', [ServiceController::class, 'restore'])->name('services.restore');


 
    Route::resource('products', ProductController::class);
    Route::get('Softproducts', [ProductController::class, 'recycleBin'])->name('products.soft');
    Route::get('product/finldelete/{id}', [ProductController::class, 'finalDelete'])->name('products.finaldelete');
    Route::get('product/restore/{id}', [ProductController::class, 'restore'])->name('products.restore');

    Route::resource('orders', OrderController::class);
  
});
