<?php

function PersistSurvey($orm, $params) {
  if (empty($params)) {
    return FALSE;
  }
  $code = GetSurveyCode($params);
  $orm->set($code, $params);
  return TRUE;
}

function PersistLanguaje($orm, $params) {
    if (empty($params)) {
        return FALSE;
    }
    $orm->set("languajes", $params["languaje"]);
    return TRUE;
}

function ParseData($params){
  if (empty($params)) {
    return [];
  }
  $parsed_params = [];
  foreach($params as $code => $apt) {
    $parsed_params[$code] = [
      "name"       => $apt["name"],
      "email"      => $apt["email"],
      "languaje"   => $apt["languaje"]
    ];    
  }
  return $parsed_params;
}

function GetSurveyCode($parsed_params) {
  $email = $parsed_params["email"];
  return hash("SHA256", $email);
}
