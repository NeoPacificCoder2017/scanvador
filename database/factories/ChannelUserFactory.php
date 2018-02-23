<?php

use Faker\Generator as Faker;

$factory->define(App\ChannelUser::class, function (Faker $faker) {
    return [
        'channel_id' => rand(1, 10),
        'user_id' => rand(1, 10),
    ];
});
