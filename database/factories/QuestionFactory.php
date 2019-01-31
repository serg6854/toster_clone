<?php

use App\Models\Question;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(Question::class, function (Faker $faker) {
    return [
        'title'      => $faker->sentence,
        'body'       => $faker->realText(random_int(1000, 2000)),
        'user_id'    => User::inRandomOrder()->first()->id,
        'created_at' => $faker->dateTimeBetween('-1 month'),
        'complexity' => $faker->randomElement([1, 2, 3]),
    ];
});
