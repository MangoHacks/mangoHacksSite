<?php

Route::get('/', 'HomeController@index');
Route::get('/tracks', function(){
    return view('trails');
});
