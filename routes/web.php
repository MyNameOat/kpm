<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('shop')->name('shop.')->group(function () {
    Route::get('/shop', 'ShopControlController@mainShop')->name('main-shop');
    Route::get('/addproduct', 'ShopControlController@addProduct')->name('add-product');
    Route::post('/addproduct/config', 'ShopControlController@addConfig')->name('add-config');
    Route::post('/product/delete/{id}', 'ShopControlController@deleteProduct');
});
