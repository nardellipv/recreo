<?php

use Faker\Generator as Faker;

$factory->define(recreo\School::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'address' => $faker->address,
        'postal_code' => $faker->postcode,
        'phone' => $faker->e164PhoneNumber,
        'type' => $faker->randomElement(['PRIVADA', 'PUBLICA']),
        'director1' => $faker->name,
        'director2' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'first_time' => $faker->randomElement(['SI', 'NO']),
        'city_id' => $faker->randomElement([2, 6, 10, 14, 22, 26, 18, 30, 34, 38, 42, 46, 50, 54, 58, 62, 66, 70, 74, 78, 82, 86, 90, 94]),
        'location_id' => rand(1, 13583),
    ];
});
