<?php

Route::get('/', function(){
    return view('welcome');
});
Route::group(['namespace' => 'Auth'], function() { 
    Route::get('login', 'LoginController@getShow')->name('login');
    Route::post('login','LoginController@postLogin');
});
