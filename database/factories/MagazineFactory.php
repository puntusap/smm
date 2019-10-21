<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Magazine;
use Faker\Generator as Faker;

$factory->define(Magazine::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'type_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
