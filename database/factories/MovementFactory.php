<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Movement;
use Faker\Generator as Faker;

$factory->define(Movement::class, function (Faker $faker) {
    return [
    'container_id' => factory(App\Container::class)->create(),
    'mv_order'     => $faker->numberBetween(1, 100),
    ];
});
