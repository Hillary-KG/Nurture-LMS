<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\models\CourseCategory;
use Faker\Generator as Faker;

$factory->define(CourseCategory::class, function (Faker $faker) {
    return [
        'categoty'=>$faker->sentence(2),
    ];
});
