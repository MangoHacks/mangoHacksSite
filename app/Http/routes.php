<?php

use App\Attendee;

Route::get('/', 'HomeController@index');
Route::get('/tracks', function(){
    return view('trails');
});
Route::get('/live', function(){
    return view('live');
});
Route::get('/confirm/', 'HomeController@confirm');

Route::get('/dashboard', ['middleware' => 'auth.basic', function() {
    $attendees = Attendee::all();

    return view('checkins', [
        'attendees' => $attendees
    ]);
}]);

Route::get('logout', function() {
    Auth::logout();
    return redirect('/');
});
