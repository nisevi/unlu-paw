<?php

include_once $app->root_path . "helpers/appointment_persistance.php";

# General values that are going to be propagated to the view
$title = "Appointments page";
$main_title = "APPOINTMENTS";
$params = $app->orm->get_all();
$error = "";
$appointment_code = $_GET["appointment_code"];
$appointment = $app->orm->get($appointment_code);

if (!isset($params)){
  $params = [];
}

if (isset($appointment_code, $appointment)){
  $content = "require 'appointments.show.view.php';";
} else {
  $appointment_code = NULL;
  $params = ParseData($params);
  $content = "require 'appointments.content.view.php';";
}

require $app->root_path . "views/appointments.view.php";
