<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showWelcome');

Route::get('/laxu/players', function(){

	return View::make('university.players');
});

Route::get('/laxu/coaches', function(){

	return View::make('university.coaches');
});



Route::resource('blog', 'BlogController');

Route::resource('gear', 'GearController');
Route::get('/gear-type/gloves', 'GearController@gloves');
Route::get('/gear-type/elbows', 'GearController@elbows');
Route::get('/gear-type/shoulders', 'GearController@shoulders');
Route::get('/gear-type/helmets', 'GearController@helmets');
Route::get('/gear-type/shafts', 'GearController@shafts');
Route::get('/gear-type/heads', 'GearController@heads');
Route::get('/gear-type/other', 'GearController@other');

Route::group(array('before' => 'auth.basic'), function()
{
    Route::get('/gear/create', 'GearController@create');
    Route::get('/blog/create', 'BlogController@create');
});


Route::get('/about', function(){

	return View::make('about');
});

Route::get('/password', function(){

	$password = Hash::make('catslair');
	print_r($password);
	exit;
});