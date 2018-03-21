<?php

Route::get('/', function(){
    return view('welcome');
});
Route::group(['namespace' => 'Auth'], function() { 
    Route::get('login', 'LoginController@getShow')->name('login');
    Route::post('login','LoginController@postLogin');
    Route::get('register', 'RegisterController@getShow')->name('register');
    Route::post('register', 'RegisterController@postRegister');
});
