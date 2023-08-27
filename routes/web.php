<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['prefix'=>'/'], function() {
    Route::get('', 'PagesController@index')->name('index');
    Route::get('/product-details', 'PagesController@product_details')->name('products.product-details');
    // hidden
    Route::get('/ypanel/login', 'PagesController@y_panel_login')->name('ypanel.login');
    Route::post('/ypanel/login', 'YPanelAuthController@store')->name('ypanel.store');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
