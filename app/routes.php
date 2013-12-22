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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/{any}', function() {
	return "some url";
});

Route::post('/', function() {
	$url = Input::get('url');
	$record = Url::whereurl($url)->first();
	if ($record) 
		return View::make('result')
				->with('shortened', $record->shortened);
});
