<?php

use Illuminate\Support\Facades\Route;
use Faker\factory as Faker;

Route::get('/', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/contact', function () {
    $contacts = [];
    $faker = Faker::create();
    for ($i = 0; $i < 20; $i++) {
        $contacts[] = [
            "nama" => $faker->name,
            "email" => $faker->unique()->safeEmail,
            "no" => $faker->phoneNumber
        ];
    }

    return view('contact', ['contacts' => $contacts]);
});
