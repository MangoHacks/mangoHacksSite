<?php

Route::get('/', 'HomeController@index');
Route::get('/tracks', function(){
    return view('trails');
});
Route::get('/live', function(){
    return view('live');
});
Route::get('/confirm/', 'HomeController@confirm');

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
