<?php

Route::get('audience/confirm/{confirm_code}', 'DazzleApp\Audience\Controllers\AudienceController@confirm')->middleware(['web']);

Route::get('audience', 'DazzleApp\Audience\Controllers\AudienceController@form')->middleware(['web']);
Route::post('audience', 'DazzleApp\Audience\Controllers\AudienceController@create')->name('audience');

// Route::get('audience/tailwind', function () {
//     return view('audience::tailwind');
// });
