<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Speed;
use Faker\Generator as Faker;

$factory->define(Speed::class, function (Faker $faker) {

    $array = ['Very Slow', 'Slow', 'Normal', 'Fast', 'Very Fast'];

    return [
        'value'=>$faker->randomElement($array)
    ];
});
