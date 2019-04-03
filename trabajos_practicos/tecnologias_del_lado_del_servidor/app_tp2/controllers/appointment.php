<?php

$title = "Appointment page";
$main_title = "Hi " . $_POST["name"] . "! here is your appointment.";
$content = "";
$error = NULL;

if ($error) {
  require dirname(__FILE__) . "/../views/appointment.view.php";
} else {
  require dirname(__FILE__) . "/../views/index.view.php";
}
