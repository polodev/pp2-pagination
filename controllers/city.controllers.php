<?php
$id = 1;
if (isset($_GET['id'])) {
  $id = $_GET['id'];
}
$city = City::find($id);
