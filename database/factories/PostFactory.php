<?php

use Faker\Generator as Faker;
use App\PostType;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'post_type_id' => PostType::random()->first()->pluck('id'),
        'title' => $faker->text(30),
        'body' => $faker->text,
        'active' => 1, // secret
    ];
});
