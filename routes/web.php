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


/* route for home */
//Route::view('home', '/home');
Route::get('home','ProductsController@list');


/* route for products */

Route::view('product', '/products.createProduct');
Route::post('productcontroller', 'ProductsController@product');

/* route for users */

Route::view('register', '/auth.register');
Route::post('usercontroller','UsersController@account');

Route::view('login', '/auth.login');

/*
Route::get('/auth.register', function () {
    return view('auth.register');
});

Route::get('/auth.login', function () {
    return view('auth.login');
});*/

