<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Category;
use App\Good;
use App\User;
use Faker\Generator as Faker;

$factory->define(Good::class, function (Faker $faker) {
    return [
        'seller_id' => User::inRandomOrder()->first()->id ?? 1,
        'category_id' => Category::inRandomOrder()->first()->id,
        'name' => $faker->words(3, true),
        'description' => $faker->sentence,
        'location' => "{$faker->city}, {$faker->country}",
        'image' => $faker->imageUrl(300, 300),
        'price' => rand(10000, 1000000),
        'live' => rand(0, 1),
    ];
});
