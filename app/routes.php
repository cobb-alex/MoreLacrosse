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

Route::get('/gear', function(){

	return View::make('gear');
});

Route::get('/laxu/players', function(){

	return View::make('university.players');
});

Route::get('/laxu/coaches', function(){

	return View::make('university.coaches');
});

Route::resource('blog', 'BlogController');

Route::resource('gear', 'GearController');

Route::get('/about', function(){

	return View::make('about');
});
