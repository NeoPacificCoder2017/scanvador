<?php

use Faker\Generator as Faker;

$factory->define(App\Check::class, function (Faker $faker) {
    return [
        'user_id' => rand(1, 10),
        'schedule_id' => rand(1, 100),
        'checked_at' => $faker->datetime,
        'status_id' => rand(1, 3),
        'scanner_id' => rand(1, 10),
        'regulated' => rand(0, 1),
    ];
});
