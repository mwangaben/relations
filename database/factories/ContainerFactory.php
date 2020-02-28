<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Container;
use Faker\Generator as Faker;

$factory->define(Container::class, function (Faker $faker) {
    return [
        'seal' => $faker->numberBetween(10000, 1000000),
    ];
});
