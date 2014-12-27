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
	return Redirect::to('/result');
});

Route::get('/result', function()
{
	return View::make('public.result');
});

/*
Route::get('/result/{roll}', function($roll)
{
	return View::make('public.result')->with('roll', $roll);
});
*/

Route::post('/result', 'ResultController@search');

Route::get('/downloads', function()
{
	return View::make('public.downloads');
});

Route::get('/search/{keyword}', function($keyword)
{
	return View::make('public.search_results')->with('keyword', $keyword);
});

Route::post('/search', 'SearchController@search');

?>

