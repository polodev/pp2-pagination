<?php
use Illuminate\Database\Capsule\Manager;
if ( isset($_POST['name']) && isset($_POST['email']) && isset($_POST['city']) ) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $city = $_POST['city'];
  User::create([
    'name' => $name,
    'email' => $email,
    'city_id' => $city
  ]);
}
$people = User::all();
if (isset($_GET['search'])) {
  $name = $_GET['search'];
  echo $name;
  $people = User::where('name', 'like', "%$name%")->get();
}
$cities = City::all();
