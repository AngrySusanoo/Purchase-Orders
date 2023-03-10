<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Debtor;
use Faker\Generator as Faker;

$factory->define(Debtor::class, function (Faker $faker) {
    return [
        'branch_id' => Branch::inRandomOrder()->first()->id,
        'name' => $faker->company,
        'credit_days' => $faker->randomNumber(2),
        'credit_limit' => $faker->randomNumber(4),
        'payment_term_id' => PaymentTerm::inRandomOrder()->first()->id,
        'party_category_id' => PartyCategory::inRandomOrder()->first()->id,
        'building' => $faker->buildingNumber,
        'street' => $faker->streetName,
        'city_id' => City::inRandomOrder()->first()->id,
        'contact_number' => $faker->e164PhoneNumber,
        'email' => $faker->email
    ];
});
