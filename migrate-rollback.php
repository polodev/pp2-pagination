<?php
require 'vendor/autoload.php';
use Illuminate\Database\Capsule\Manager as Capsule;
//order matters
Capsule::schema()->dropIfExists('users');
Capsule::schema()->dropIfExists('cities');

