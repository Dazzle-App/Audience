<?php

Route::get('audience/confirm/{confirm_code}', function ($confirm_code) {
    dd('works', $confirm_code);
});

Route::get('audience', 'DazzleApp\Audience\Controllers\AudienceController@form')->middleware(['web']);
Route::post('audience', 'DazzleApp\Audience\Controllers\AudienceController@create')->name('audience');

// Route::get('audience/tailwind', function () {
//     return view('audience::tailwind');
// });
