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
	return View::make('static.home');
});

Route::get('/about_faith_s',['as'=>'about','uses'=>'staticController@about']);
Route::get('/faq',['as'=>'faq','uses'=>'staticController@faq']);
Route::get('/contact',['as'=>'contact','uses'=>'staticController@contact']);
Route::post('/contact',array('as'=>'sendcontact','uses'=>'StaticController@sendcontact'));
Route::resource('portfolio', 'portfolioController');
Route::get('/portfolio',['as'=>'portfolio','uses'=>'categoryController@index']);
Route::get('/album/{id}',['as'=>'show.portfolio','uses'=>'portfolioController@show']);


Route::group(['prefix'=>'backend'], function()
{
	Route::get('/upload/{id}',['as'=>'imageupload','uses'=>'portfolioController@upload']);
	Route::post('/upload',['as'=>'store.image','uses'=>'portfolioController@store']);

	Route::get('/create/album',['as'=>'create.album','uses'=>'categoryController@create']);
	Route::post('/create/album',['as'=>'store.album','uses'=>'categoryController@store']);
});
