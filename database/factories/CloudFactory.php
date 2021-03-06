<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cloud;
use Faker\Generator as Faker;

$factory->define(Cloud::class, function (Faker $faker) {
    return [
        'name' => strtolower($faker->firstName),
        'content'=>$faker->sentence(),
        'pwd'=>bcrypt($faker->password),
    ];
});
