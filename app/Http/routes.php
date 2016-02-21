<?php

Route::get('/', 'HomeController@index');
Route::get('/tracks', function(){
    return view('trails');
});
Route::get('/confirm/', 'HomeController@confirm');