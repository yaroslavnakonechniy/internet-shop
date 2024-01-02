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

Auth::routes([
    'reset' => false,
    'confirm' => false,
    'verify' => false,
]);

Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('get-logout');

Route::group(['midlleware' => 'auth'], function(){
    Route::get('/orders', 'App\Http\Controllers\Admin\OrderController@index')->name('home');
});



Route::get('/', 'App\Http\Controllers\MainController@index')->name('index');
Route::get('/categories', 'App\Http\Controllers\MainController@categories')->name('categories');


ROute::get('/basket', 'App\Http\Controllers\BasketController@basket')->name('basket');
ROute::get('/basket/place', 'App\Http\Controllers\BasketController@basketPlace')->name('basket-place');
ROute::post('/basket/config', 'App\Http\Controllers\BasketController@basketConfig')->name('basket-config');

ROute::post('/basket/add/{id}', 'App\Http\Controllers\BasketController@basketAdd')->name('basket-add');
ROute::post('/basket/remove/{id}', 'App\Http\Controllers\BasketController@basketRemove')->name('basket-remove');


Route::get('/{category}', 'App\Http\Controllers\MainController@category')->name('category');
Route::get('/{category}/{product?}', 'App\Http\Controllers\MainController@product')->name('product');

Auth::routes();

