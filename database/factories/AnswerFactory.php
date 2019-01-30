<?php

use App\Models\Answer;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(Answer::class, function (Faker $faker) {
    $author = User::inRandomOrder()->first();

    return [
        'body'    => $faker->realText(random_int(500, 1000)),
        'user_id' => $author->id
    ];
});
