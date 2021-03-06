<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\WorkExperience;
use Faker\Generator as Faker;

$factory->define(WorkExperience::class, function (Faker $faker) {
    return [
        'candidate_id' => App\Candidate::all()->random()->id,
        'title' => $faker->sentence,
        'w_from' => $faker->dateTimeBetween('-30 years', '-10 years', 'America/Lima'),
        'w_to' => $faker->dateTimeBetween('-10 years', 'now', 'America/Lima'),
        'company' => $faker->word,
        'w_additional_information' => $faker->paragraph,
    ];
});
