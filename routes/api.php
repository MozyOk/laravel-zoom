<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return [
        'result' => true,
    ];
});

Route::get('/meetings', 'Zoom\MeetingController@list');
Route::post('/meetings', 'Zoom\MeetingController@create');

// Get information of the meeting room by ID.
// Route::get('/meetings/{id}', 'Zoom\MeetingController@get')->where('id', '[0-9]+');
// Route::patch('/meetings/{id}', 'Zoom\MeetingController@update')->where('id', '[0-9]+');
// Route::delete('/meetings/{id}', 'Zoom\MeetingController@delete')->where('id', '[0-9]+');
