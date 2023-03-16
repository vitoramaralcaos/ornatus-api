<?php

/** @var \Illuminate\Database\Eloquent\Factories\Factory $factory */


use App\Models\{User, Product};
use Faker\Generator as Faker;



$factory->define(Product::class, function (Faker\Generator $faker) {
    return [
        'name' => $this->faker->sentence,
        'price' => $this->faker->randomFloat(2, 0, 10),
        'created_at' => $this->faker->timestamps(),
    ];
});
