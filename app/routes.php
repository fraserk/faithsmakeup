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

Route::get('/', 'staticController@index');

Route::get('/about_faith_s',['as'=>'about','uses'=>'staticController@about']);
Route::get('/faq',['as'=>'faq','uses'=>'staticController@faq']);
Route::get('/contact',['as'=>'contact','uses'=>'staticController@contact']);
Route::post('/contact',array('as'=>'sendcontact','uses'=>'staticController@sendcontact'));
Route::resource('portfolio', 'portfolioController');
Route::get('/portfolio',['as'=>'portfolio','uses'=>'categoryController@index']);
Route::get('/album/{id}',['as'=>'show.portfolio','uses'=>'portfolioController@show']);
Route::get('/blog',['as'=>'blog','uses'=>'staticController@blog']);
Route::get('/blog/{id}',['as'=>'show.blog','uses'=>'staticController@showblog']);

Route::group(['prefix'=>'backend','before'=>'auth.basic'], function()
{
	Route::get('/',['as'=>'backend','uses'=>'staticController@homeimage']);
	Route::get('/upload/{id}',['as'=>'imageupload','uses'=>'portfolioController@upload']);
	Route::post('/upload',['as'=>'store.image','uses'=>'portfolioController@store']);

	Route::get('/create/album',['as'=>'create.album','uses'=>'categoryController@create']);
	Route::get('/edit/album/{id}',['as'=>'edit.album','uses'=>'categoryController@edit']);
	Route::post('/create/album',['as'=>'store.album','uses'=>'categoryController@store']);
	Route::put('/create/album/{id}',['as'=>'update.album','uses'=>'categoryController@update']);
	Route::delete('/delete/album/{id}',['as'=>'destroy.album','uses'=>'categoryController@destroy']);

	Route::get('/homepage',['as'=>'homepageimage','uses'=>'staticController@homeimage']);
	Route::post('/homepage',['as'=>'dohomepageimage','uses'=>'staticController@dohomeimage']);
	Route::post('/homepage/delete',['as'=>'delhomeimage','uses'=>'staticController@delhomeimage']);

	Route::get('/blogs',['as'=>'backendblogs','uses'=>'blogController@index']);
	Route::post('/blogs',['as'=>'store.blog','uses'=>'blogController@store']);
	Route::get('/blogs/{id}',['as'=>'edit.blog','uses'=>'blogController@edit']);
    Route::patch('/blogs/{id}',['as'=>'update.blog','uses'=>'blogController@update']);

    Route::get('/faq',['as'=>'list.faq','uses'=>'sitesettingController@faq']);
    Route::put('/faq',['as'=>'update.faq','uses'=>'sitesettingController@dofaq']);

    Route::get('/aboutme',['as'=>'list.aboutme','uses'=>'sitesettingController@aboutme']);
    Route::put('/aboutme',['as'=>'update.aboutme','uses'=>'sitesettingController@doaboutme']);

    Route::get('/service',['as'=>'list.service','uses'=>'sitesettingController@service']);
    Route::put('/service',['as'=>'update.service','uses'=>'sitesettingController@doservice']);

});
