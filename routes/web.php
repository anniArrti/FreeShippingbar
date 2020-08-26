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

Route::get('/', function () {
    return view('welcome');
})->middleware(['auth.shopify'])->name('home');

Route::get('/getbars', 'HomeController@index')->middleware('cors')->name('script');
Route::get('/script', 'ShopifyController@index')->middleware('cors')->name('script');
Route::post('/create', 'HomeController@create')->middleware(['auth.shopify']);