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
// name=the route which you write

Route::get('/', function () {
    return view('main');
});
Route::get('products', 'ProductController@index')->name('product.index');
Route::get('create', 'ProductController@create')->name('create.product');
Route::post('store', 'ProductController@store')->name('product.store');
// for edit with pass id
Route::get('edit/product/{id}', 'ProductController@Edit');
Route::post('update/product/{id}', 'ProductController@update');
Route::get('delete/product/{id}', 'ProductController@delete');
Route::get('show/product/{id}', 'ProductController@show');
