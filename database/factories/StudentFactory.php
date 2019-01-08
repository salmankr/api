<?php

use Faker\Generator as Faker;

$factory->define(App\student::class, function (Faker $faker) {
    return [
        'name'=> $faker->name,
        'roll_no'=>$faker->unique()->randomNumber($nbDigits = 3),
        'section' =>$faker->numberBetween($min = 1, $max = 7),
        'teacher'=>$faker->name,
    ];
});
