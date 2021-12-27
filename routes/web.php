<?php

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
Route::middleware(['auth'])->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
    Route::resource('products', App\Http\Controllers\ProductController::class);
    Route::resource('categories', App\Http\Controllers\CategoryController::class);
    Route::resource('customers', App\Http\Controllers\CustomerController::class);
    Route::resource('promo-codes', App\Http\Controllers\PromoCodeController::class);
    Route::resource('colors', App\Http\Controllers\ColorController::class);
    Route::resource('invoices', App\Http\Controllers\InvoiceController::class);
    Route::resource('sizes', App\Http\Controllers\SizeController::class);
    Route::resource('product-reviews', App\Http\Controllers\ProductReviewController::class);
    Route::get('reports', [App\Http\Controllers\ReportController::class, 'index']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
