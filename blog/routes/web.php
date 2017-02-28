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


//pass value Rout to View
Route::get('/pass_value_R2V', function() 	
{
		$name = "Jonhn";
		$surename = "Eltone .Mass";
		// return view('pass_value_R2V', ['name'=> $name],
		// 							  ['surename'=> $surename]	);
		return view('pass_value_R2V')
			->with('name', $name)
			->with('surename', $surename);
});

//layout
Route::get('layout', function () {
	$array = [1,2,3,4,5];
    return view('layout1')
    	->with('array', $array);
});

//hw22Feb
Route::get('/hw22feb', 'HelloController@hw22feb');
Route::post('/hw22feb_isPrime', 'HelloController@hw22feb_isPrime');
Route::post('/hw22feb_printPrime', '<HelloController@hw22feb></HelloController@hw22feb>_printPrime');
Route::post('/hw22feb_colorPrime', 'HelloController@hw22feb_colorPrime');


//hw01mar
Route::get('/hw01mar', 'HelloController@hw01mar');
Route::post('/hw01mar_isPrime', 'HelloController@hw01mar_isPrime');
Route::post('/hw01mar_printPrime', 'HelloController@hw01mar_printPrime');
Route::post('/hw01mar_colorPrime', 'HelloController@hw01mar_colorPrime');