<?php
require 'vendor/autoload.php';
require 'migrate-rollback.php';
use Illuminate\Database\Capsule\Manager;
Manager::schema()->create('cities', function ($table) {
  $table->increments('id');
  $table->string('name');
  $table->string('country');
  $table->timestamps();
});
Manager::schema()->create('users', function ($table) {
    $table->increments('id');
    $table->string('name');
    $table->string('email');
    $table->integer('city_id')->unsigned();
    $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
    $table->timestamps();
});





