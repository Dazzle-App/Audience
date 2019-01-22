<?php

Route::get('audience/confirm/{confirm_code}', function ($confirm_code) {
    dd('works', $confirm_code);
});

Route::get('audience', 'DazzleApp\Audience\Controllers\AudienceController@form')->middleware(['web']);
Route::post('audience', 'DazzleApp\Audience\Controllers\AudienceController@create')->name('audience');

Route::post('someroute', 'DazzleApp\Audience\Controllers\AudienceController@test');
