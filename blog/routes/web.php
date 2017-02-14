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

use Illuminate\Http\Request;



Route::get('/', 'HelloController@welcome');

Route::get('/hello', 'HelloController@hello');

// get
Route::get('/getText', 'HelloController@getTextGet');

// post
Route::post('/getText', 'HelloController@getTextPost');

//HW 15Feb
Route::get('/', 'HelloController@hw15feb');
Route::post('/isPrime', 'HelloController@isPrime');
Route::post('/printPrime', 'HelloController@printPrime');
Route::post('/colorPrime', 'HelloController@colorPrime');
