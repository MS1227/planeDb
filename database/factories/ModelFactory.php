<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Airport::class, function (Faker\Generator $faker) {
    return [
        'identifier' => strtoupper($faker->randomLetter . $faker->randomLetter . $faker->randomLetter . $faker->randomLetter),
        'name' => $faker->name . ' Airport',
        'is_controlled' => $faker->boolean,
        'num_runways' => $faker->randomDigitNotNull,
    ];
});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Flight::class, function (Faker\Generator $faker) {
    return [
        'tail' => strtoupper($faker->randomLetter . $faker->randomLetter . $faker->randomLetter . $faker->randomLetter . $faker->randomLetter),
        'departure_airport_id' => function () {
            return factory(App\Airport::class)->create()->id;
        },
        'destination_airport_id' => function () {
            return factory(App\Airport::class)->create()->id;
        },
        'souls' => $faker->randomDigitNotNull,
        'departed_at' => $faker->dateTimeThisCentury,
    ];
});