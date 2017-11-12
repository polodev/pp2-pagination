<?php
$id = 1;
if ( isset($_GET['id']) ) {
  $id  = $_GET['id'];
}
$user = User::findOrFail($id);
require 'views/people.view.php';

