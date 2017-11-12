<?php
require 'vendor/autoload.php';
$faker = Faker\Factory::create();
// to create user fake data
for ($i = 0; $i < 10; $i++) {
  City::create([
    'name' => $faker->city,
    'country' => $faker->country
  ]);
}

//to create user fake data
for ($i = 1; $i < 60; $i++) {
  User::create([
    'name' => $faker->name,
    'email' => $faker->email,
    'city_id' => $i % 10 === 0 ? 1 : $i % 10 
  ]);
}






