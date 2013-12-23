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

Route::get('/', function() {
	return View::make('start');
});

Route::get('/{any}', function($shortened) {
	// query the database for the record with $shortened
	$row = Url::whereshortened($shortened)->first();
	
	// not found -> redirect to home
	if (is_null($row)) return Redirect::to('/');

	// redirect to the full url
	return Redirect::to($row->url);
});

Route::post('/', function() {
	// get user input
	$url = Input::get('url');

	// validate user input via URL model class
	$valid = Url::validate(['url' => $url]);
	if ($valid !== true) return Redirect::to('/')->witherrors($valid->messages());

	// check if the record already exists in the database via URL model class
	$record = Url::whereurl($url)->first();
	if ($record) return View::make('result')->with('shortened', $record->shortened);

	// add new record via URL model class
	$result = Url::create(['url' => $url, 'shortened' => Url::generate_uniq_url()]);
	if ($result) return View::make('result')->with('shortened', $result->shortened);
});

