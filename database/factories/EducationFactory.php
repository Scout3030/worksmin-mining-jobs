<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Education;
use Faker\Generator as Faker;

$factory->define(Education::class, function (Faker $faker) {
    return [
        'candidate_id' => App\Candidate::all()->random()->id,
        'degree' => $faker->sentence,
        'e_from' => $faker->dateTimeBetween('-30 years', '-10 years', 'America/Lima'),
        'e_to' => $faker->dateTimeBetween('-10 years', 'now', 'America/Lima'),
        'institution' => $faker->word,
        'e_additional_information' => $faker->paragraph,
    ];
});
