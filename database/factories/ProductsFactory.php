<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'price' => $faker->numberBetween(1, 3000),
        'description' => $faker->paragraph(3),
        'category_id' => $faker->numberBetween(3, 53),
        'image' => $faker->image('storage/app/public',400,300, null, false)
    ];
});
