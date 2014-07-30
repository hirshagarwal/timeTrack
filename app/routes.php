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
	return View::make('home');
});

Route::get('/signup', function()
{
	return View::make('signup');
});

Route::get('/login', function()
{
	return View::make('login');
});

Route::get('/about', function()
{
	return View::make('about');
});

Route::get('/get', function()
{
	return View::make('get');
});

Route::post('/account/create', 'AccountController@create');

Route::post('/account/login', 'AccountController@login');

HTML::macro('active_link', function($route, $text) {	
	if( Request::path() == $route ) {
		$active = "class='active'";
	}
	else {
		$active = '';
	}
 
  return '<li ' . $active . '><span>' . link_to($route, $text) . '</span></li>';
});