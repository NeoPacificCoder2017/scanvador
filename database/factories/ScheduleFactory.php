<?php

use Faker\Generator as Faker;

$factory->define(App\Schedule::class, function (Faker $faker) {
    return [
        'place_id' => rand(1,20),
        'start_at' => $faker->datetime,
        'end_at' => $faker->datetime,
        'constant_id_lateness' => rand(1,10),
        'constant_id_absence' => rand(1,10),
        'teacher_id' => rand(1,10),
        'planner_id' => rand(1,10),
    ];
});
