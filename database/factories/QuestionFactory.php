<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Question::class, function (Faker $faker) {
    return [
        'body' => $faker->realText(random_int(1000, 2000)),
        'user_id' => \App\Models\User::inRandomOrder()->first()->id
    ];
});
