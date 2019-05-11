<?php

include_once $app->root_path . "helpers/survey_persistance.php";

# General values that are going to be propagated to the view
$title = "Surveys page";
$main_title = "List of languajes";
$params = $app->orm->get_all();
$error = "";

$languajes = [];
foreach($params as $user) {
  $languaje = $user["languaje"];
  if (array_key_exists($languaje, $languajes)){
    $languajes[$languaje]=$languajes[$languaje]+1;
  } else {
    $languajes[$languaje]=1;
  }
}

if (!isset($params)){
  $params = [];
}

$survey_code = NULL;
$params = ParseData($params);
$content = "require 'surveys.content.view.php';";

require $app->root_path . "views/surveys.view.php";
