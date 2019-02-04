<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Tag::class, function (Faker $faker) {
    return [
        'title' => $faker->words(random_int(1, 2), true),
        'slug' => $faker->unique()->slug,
    ];
});
