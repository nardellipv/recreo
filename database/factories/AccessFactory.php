<?php

use Faker\Generator as Faker;

$factory->define(\recreo\AccessTest::class, function (Faker $faker) {
    return [
        'email' => $faker->unique()->safeEmail,
        'access' => $faker->randomElement(['L1', 'L2','B']),
    ];
});
