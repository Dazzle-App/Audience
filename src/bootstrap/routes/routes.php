<?php

Route::get('audience/confirm/{confirm_code}', function ($confirm_code) {
    dd('works', $confirm_code);
});

Route::get('audience', 'DazzleApp\Audience\Controllers\AudienceController@form');

Route::post('someroute', 'DazzleApp\Audience\Controllers\AudienceController@test');
