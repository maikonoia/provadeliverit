<?php

namespace Database\Factories;

use App\Models\Participant;
use Faker\Factory;
use Faker\Generator as Faker;
use Carbon\Carbon;

/**
 * Define the model's default state.
 *
 * @return array
 */
$factory->define(Participant::class, function (Faker $faker) {
    $faker = Factory::create('pt_BR');
    return [
        'name'  => $faker->name,
        'cpf'   => $faker->cpf,
        'birth' => Carbon::now()->subYears(mt_rand(18, 60))->format('Y-m-d')
    ];
});
