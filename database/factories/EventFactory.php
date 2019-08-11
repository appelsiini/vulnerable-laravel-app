<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Event;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(Event::class, function (Faker $faker) {
    return [
        'name'        => $faker->sentence,
        'description' => $faker->text,
        'date'        => Carbon::now()->addDays($faker->numberBetween(1, 90)),
        'location'    => $faker->streetAddress,
    ];
});
