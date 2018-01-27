<?php

use Faker\Generator as Faker;

$factory->define(recreo\Teacher::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName,
        'lastname' => $faker->lastName,
        'dni' => $faker->numberBetween($min = 10000000, $max = 99999999),
        'space' => $faker->sentence($nbWords = 3, $variableNbWords = true),
        'level' => $faker->randomElement(['1', '2']),
        'phone' => $faker->e164PhoneNumber,
        'email' => $faker->unique()->safeEmail,
        'first_time' => $faker->randomElement(['SI', 'NO']),
        'school_id' => rand(1, 10),
    ];
});
