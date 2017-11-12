<?php
Use Illuminate\Database\Capsule\Manager;
if (isset($_POST['city']) && isset($_POST['country'])) {
  echo 'hello world';
  $city = $_POST['city'];
  $country = $_POST['country'];
  City::create([
    'name' => $city,
    'country' => $country
  ]);
}
$cities = City::all();
