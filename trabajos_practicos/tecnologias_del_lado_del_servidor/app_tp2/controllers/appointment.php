<?php

include_once $app->root_path . "helpers/appointment_validations.php";
include_once $app->root_path . "helpers/appointment_filter_params.php";
include_once $app->root_path . "helpers/appointment_diagnostic_image.php";
include_once $app->root_path . "helpers/appointment_persistance.php";

# General values that are going to be propagated to the view
$title = "Appointment page";
$main_title = "Appointments.";
$content = "require 'appointment.content.view.php';";
$mandatory_params = MandatoryParams($_POST);
$error = "";

# Handling image upload
# File info
$image_basename = basename($_FILES["diagnostic"]["name"]);
$extention = strtolower(pathinfo($image_basename, PATHINFO_EXTENSION));
$image_size = $_FILES["diagnostic"]["size"];
$image_encrypted_name = "";

if (ValidImage($extention, $image_basename, $image_size)) {
  $image_dir = $app->root_path . "uploads/";
  $time_now = time();
  $image_temp_name = $_FILES["diagnostic"]["tmp_name"];

  # File to be saved
  $image_encrypted_name = hash("sha256", $time_now . $image_basename . $image_size) . "." .$extention;
  $image_file = $image_dir . $image_encrypted_name;
  
  if (!move_uploaded_file($image_temp_name, $image_file)) {
    $error = $error . "Sorry, there was an error uploading your file. ";
  }
} elseif(!ValidImageExtention($extention) && ValidImageBasename($image_basename)) {
  $error = $error . "Sorry, we only admit 'jpg' and 'png' files. ";
} elseif(!ValidImageSize($image_size) && ValidImageBasename($image_basename)) {
  $error = $error . "Sorry, the file was too big to upload. ";
}

# Handling summarized form to display to the user
if (ValidParams($mandatory_params)) {
  $main_title = "Hi " . $mandatory_params["name"] . "! here is your appointment.";
  $subtitle = "Appointment request";
  $params = $_POST;
  PersistAppointment($app->orm, $params, $image_encrypted_name);
} else {
  $params = [];
  $subtitle = "Something went wrong when trying to process your request. Please try again.";
  $error = $error . ParamErrorsMessage($mandatory_params);
}

require $app->root_path . "views/appointment.view.php";
