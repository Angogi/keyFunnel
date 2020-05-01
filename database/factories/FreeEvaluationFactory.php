<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\FreeEvaluation;
use Faker\Generator as Faker;

$factory->define(App\FreeEvaluation::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail, 
        'phone' => $faker->phoneNumber, 
        'webSite' =>$faker->word(10),
        'ads' => $faker->randomElement(['Si','No']),
        'socialMediaAds' =>$faker->randomElement(['Facebook','Instagram', 'youtube','google','otra']),
        'adsAditional' =>$faker->sentence(1),
        'comments' =>$faker->text(15),

    ];
});


