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

/*Route::get('/', 'App\Http\Controllers\MainController@index')->name('index');
Route::get('/categories', 'App\Http\Controllers\MainController@categories')->name('categories');
Route::get('/category/{product?}', 'App\Http\Controllers\MainController@product')->name('product');
Route::get('/{category}', 'App\Http\Controllers\MainController@category')->name('category');
Route::get('/basket', 'App\Http\Controllers\MainController@basket')->name('basket');
Route::get('/basket/place', 'App\Http\Controllers\MainController@baskerPlace')->name('basket-place');
Route::get('/card', 'App\Http\Controllers\MainController@card');

*/


Route::get('/', 'App\Http\Controllers\MainController@index')->name('index');
Route::get('/categories', 'App\Http\Controllers\MainController@categories')->name('categories');


ROute::get('/basket', 'App\Http\Controllers\BasketController@basket')->name('basket');
ROute::get('/basket/place', 'App\Http\Controllers\BasketController@basketPlace')->name('basket-place');
ROute::post('/basket/config', 'App\Http\Controllers\BasketController@basketConfig')->name('basket-config');

ROute::post('/basket/add/{id}', 'App\Http\Controllers\BasketController@basketAdd')->name('basket-add');
ROute::post('/basket/remove/{id}', 'App\Http\Controllers\BasketController@basketRemove')->name('basket-remove');


Route::get('/{category}', 'App\Http\Controllers\MainController@category')->name('category');
Route::get('/{category}/{product?}', 'App\Http\Controllers\MainController@product')->name('product');
