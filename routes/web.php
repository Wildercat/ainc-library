<?php

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

// Book
Route::post('/books', 'BookController@store');
Route::get('/books', 'BookController@index');
Route::get('/books/create', 'BookController@create');
Route::get('/books/{book}', 'BookController@show')->name('books.show');

//Checkout
Route::post('/checkouts', 'CheckoutController@store');
Route::get('/checkouts', 'CheckoutController@index');
Route::get('/checkouts/{checkout}', 'CheckoutController@show')->name('checkouts.show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
