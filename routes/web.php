<?php
Route::get('/', function(){
	return view('welcome');
});

Route::get('login', 'LoginController@getShow')->name('login');
Route::post('login','LoginController@postLogin');
