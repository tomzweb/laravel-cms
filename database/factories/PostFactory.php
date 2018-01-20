<?php

use Faker\Generator as Faker;
use App\PostType;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'post_type_id' => $faker->numberBetween(1,4),
        'title' => $faker->text(30),
        'slug' => $faker->slug,
        'content' => $faker->text,
        'is_active' => 1,
    ];
});
