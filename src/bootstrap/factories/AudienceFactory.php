<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(DazzleApp\Audience\Models\Audience::class, function (Faker $faker) {
    return [
        'email' => $faker->email,
        'confirmation_code' => (string) Str::uuid(4),
    ];
});
