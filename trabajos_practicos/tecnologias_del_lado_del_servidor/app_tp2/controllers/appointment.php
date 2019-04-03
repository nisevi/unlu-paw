<?php

$title = "Appointment page";
$main_title = "Hi " . $_POST["name"] . "! here is your appointment.";
$content="";
$attributes = $_POST;
$error = NULL;

# TODO fail back to HOME page if parameters validation fails
if (TRUE) {
  require dirname(__FILE__) . "/../views/appointment.view.php";
} else {
  require dirname(__FILE__) . "/../views/index.view.php";
}
