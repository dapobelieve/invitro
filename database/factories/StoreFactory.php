<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Store::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(3, true),
        'slug'  => str_slug($faker->sentence(2, true)),
        'price' => $faker->randomFloat(1, 20, 2000),
        'details'  => $faker->sentence(35),
    ];
});
