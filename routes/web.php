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



Route::prefix( 'dashboard')->middleware('auth')->group(function(){
    Route::get('index', [App\Http\Controllers\Dashboard\HomeController::class, 'index'])->name('index');

    Route::resource('user', App\Http\Controllers\Dashboard\UserController::class)->only([
        'index', 'store', 'update', 'destroy'
    ]);
    Route::resource('category', App\Http\Controllers\Dashboard\CategoryController::class)->only([
        'index', 'store', 'update', 'destroy'
    ]);

    Route::resource('product', App\Http\Controllers\Dashboard\ProductController::class)->only([
        'index', 'store', 'update', 'destroy' , 'show'
    ]);

    Route::resource('contact_us', App\Http\Controllers\Dashboard\ContactUsController::class)->only([
        'index', 'destroy'
    ]);

    Route::match(['get', 'post'], 'profile', [App\Http\Controllers\Dashboard\UserController::class, 'profile'])->name('user.profile');


});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/test', [App\Http\Controllers\HomeController::class, 'websiteIndex'])->name('website');
