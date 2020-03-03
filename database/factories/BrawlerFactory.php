<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Brawler;
use Faker\Generator as Faker;

$factory->define(Brawler::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'offense'=>$faker->numberBetween(1,5),
        'defense'=>$faker->numberBetween(1,5),
        'utility'=>$faker->numberBetween(1,5),
        'super'=>$faker->slug(2,5),
        'attack_speed_id'=>$faker->numberBetween(1,5),
        'movement_speed_id'=>$faker->numberBetween(1,5),
    ];
});
