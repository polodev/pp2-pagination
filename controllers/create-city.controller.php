<?php
Use Illuminate\Database\Capsule\Manager;
if (isset($_POST['city']) && isset($_POST['country'])) {
  $city = $_POST['city'];
  $country = $_POST['country'];
  City::create([
    'name' => $city,
    'country' => $country
  ]);
}
$cities = City::all();
