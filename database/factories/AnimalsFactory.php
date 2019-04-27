<?php

use App\Animals;
use App\AnimalsImages;
use Faker\Generator as Faker;

$factory->define(Animals::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'animal_type' => \App\AnimalsTypes::all()->random()->id,
        'animal_breed' => \App\AnimalsBreeds::all()->random()->id,
        'sex' => rand(1,2),
        'info' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        'price' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
        'dateBorn' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'negotiable' => rand(0,1),
        'free' => rand(0,1),
        'passport' => rand(0,1),
        'vaccines' => rand(0,1),
        'genealogy' => rand(0,1),
        'diseases' => rand(0,1),
        'mating' => rand(0,1),
        'meetings' => rand(0,1),
        'ad_type' => rand(1,2),
        'user_id' => \App\User::all()->random()->id,
    ];

});

$factory->define(AnimalsImages::class, function (Faker $faker) {
    return [
        'image' => $faker->imageUrl(rand(200,800), rand(200,800), 'animals'),
    ];

});


