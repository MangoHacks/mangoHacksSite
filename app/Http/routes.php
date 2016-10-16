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
    $checkins = Attendee::where('checked_in', 1)->count();

    return view('checkins', [
        'attendees' => $attendees,
        'checkins' => $checkins
    ]);
}]);

Route::get('/checkin/{id}', ['middleware' => 'auth.basic', function($id) {
    $attendee = Attendee::where('id', $id)->first();
    if($attendee['checked_in'] == 0) {
        $attendee['checked_in'] = 1;
    }
    else {
        $attendee['checked_in'] = 0;
    }
    $attendee->save();
    return redirect()->back();
}]);

Route::get('logout', function() {
    Auth::logout();
    return redirect('/');
});

Route::get('/yelp/{latitude},{longitude}/{term?}', 'YelpController@show');
