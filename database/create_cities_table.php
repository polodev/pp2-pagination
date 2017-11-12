<?php 
use Illuminate\Database\Capsule\Manager;
Manager::schema()->create('cities', function ($table) {
  $table->increments('id');
  $table->string('name');
  $table->string('country');
  $table->timestamps();
});

