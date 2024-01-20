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

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function(){
    Route::group(['middleware' => 'is_admin'], function(){
        Route::get('/orders', 'App\Http\Controllers\Admin\OrderController@index')->name('home');

        
    });
    Route::resource('categories', 'App\Http\Controllers\Admin\Categories\CategoriesController');
    Route::resource('products', 'App\Http\Controllers\Admin\Product\ProductController');
});



Route::get('/', 'App\Http\Controllers\MainController@index')->name('index');
Route::get('/categories', 'App\Http\Controllers\MainController@categories')->name('categories');

Route::group(['prefix' => 'basket'], function(){

    Route::post('/add/{id}', 'App\Http\Controllers\BasketController@basketAdd')->name('basket-add');

    Route::group(['middleware' => 'basket_not_empty'], function(){
        ROute::get('/', 'App\Http\Controllers\BasketController@basket')->name('basket');
        ROute::get('/place', 'App\Http\Controllers\BasketController@basketPlace')->name('basket-place');
        ROute::post('/config', 'App\Http\Controllers\BasketController@basketConfig')->name('basket-config');
        ROute::post('/remove/{id}', 'App\Http\Controllers\BasketController@basketRemove')->name('basket-remove');
    });
});



Route::get('/{category}', 'App\Http\Controllers\MainController@category')->name('category');
Route::get('/{category}/{product?}', 'App\Http\Controllers\MainController@product')->name('product');

Auth::routes();

