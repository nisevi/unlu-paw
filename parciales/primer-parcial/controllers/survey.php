<?php

include_once $app->root_path . "helpers/survey_validations.php";
include_once $app->root_path . "helpers/survey_filter_params.php";
include_once $app->root_path . "helpers/survey_persistance.php";

# General values that are going to be propagated to the view
$title = "Survey page";
$main_title = "Surveys.";
$content = "require 'survey.content.view.php';";
$mandatory_params = MandatoryParams($_POST);
$error = "";

# Handling summarized form to display to the user
if (ValidParams($mandatory_params)) {
  $main_title = "Hi " . $mandatory_params["name"] . "! Thank you for filling the form.";
  $subtitle = "Survey request";
  $params = $_POST;
  PersistSurvey($app->orm, $params);
} else {
  $params = [];
  $subtitle = "Something went wrong when trying to process your request. Please try again.";
  $error = $error . ParamErrorsMessage($mandatory_params);
}

require $app->root_path . "views/survey.view.php";
