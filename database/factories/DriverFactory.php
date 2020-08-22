<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'pda_pass' =>$faker->password,
        'pda_mobile' =>$faker->tollFreePhoneNumber,
        'rent' =>$faker->lastName,
        'driver_no' =>$faker->realText($faker->numberBetween(10,20)),
        'active' =>boolean(50),
        'has_pda' =>$faker->boolean(50),
        'driver_name' =>$faker->firstName,
        'driver_lName' =>$faker->lastName,
        'email' =>$faker->unique()->safeEmail,
        'tel_no' =>$faker->tollFreePhoneNumber,
        'address' =>$faker->address,
        'date_of_birth' =>$faker->dateTimeThisCentury->format('Y-m-d'),
        'mobile_no' =>$faker->tollFreePhoneNumber,
        'Ni' =>$faker->idNumber,
        'driver_type' =>$faker->lastName,
        'monthly_rent' =>$faker->numberBetween(1000,9000),
        'profile_image' =>$faker->imageUrl($width = 640, $height = 480),
        'vehicle_make' =>$faker->word,
        'assigned_on' =>$faker->dateTimeThisCentury->format('Y-m-d'),
        'end_on' =>$faker->dateTimeThisCentury->format('Y-m-d'),
        'vehicle_type' =>$faker->word,
        'vehicle_color' =>$faker->safeColorName,
        'vehicle_no' =>$faker->jpjNumberPlate,
        'owner' =>$faker->name,
        'vehicle_model' =>$faker->word,
        'available_on' =>$faker->dateTimeThisCentury->format('Y-m-d'),
        'end_at' =>$faker->dateTimeThisCentury->format('Y-m-d'),
        'pass' =>$faker->password,
        'created_at'=>$faker->dateTime->now(),
        'updated_at'=>$faker->dateTime
    ];
});
