<?php

use App\Http\Controllers\ProductController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/products/all', '\App\Http\Controllers\ProductController@getAllProducts')->name('products.all');
Route::post('/products/save', '\App\Http\Controllers\ProductController@saveProducts')->name('products.save');
Route::post('/products/{id}/update', '\App\Http\Controllers\ProductController@updateProducts')->name('products.update');
Route::get('/products/{id}/edit', '\App\Http\Controllers\ProductController@editProducts')->name('products.edit');
Route::post('/products/{id}/delete', '\App\Http\Controllers\ProductController@deleteProducts')->name('products.delete');






