<?php

use Faker\Generator as Faker;

$factory->define(DazzleApp\Audience\Models\Audience::class, function (Faker $faker) {
    return [
        'email' => $faker->email,
    ];
});
