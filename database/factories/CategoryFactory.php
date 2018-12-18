<?php

use Faker\Generator as Faker;
use App\Models\Category;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'description' => $faker->text(20),
        'parent_id' => 0,
    ];
});
