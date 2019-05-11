<?php

function ValidName($name) {
  return isset($name);
}

function ValidLanguaje($name) {
  return true;
}

function ValidEmail($email) {
  return isset($email) && filter_var($email, FILTER_VALIDATE_EMAIL);
}

function ValidParams($mandatory_params) {
  if (empty($mandatory_params)) {
    return FALSE;
  } else {
    $flag = TRUE;
    foreach ($mandatory_params as $param => $value){
      $function_name = "Valid" . str_replace(" ", "", ucwords(str_replace("_", " ", $param)));
      $flag = $flag && $function_name($value);
    }
    return $flag;
  }
}

function ParamErrors($mandatory_params) {
  if (empty($mandatory_params)) {
    return [];
  } else {
    $errors = [];
    foreach ($mandatory_params as $param => $value){
      $function_name = "Valid" . str_replace(" ", "", ucwords(str_replace("_", " ", $param)));
      if (!$function_name($value)) {
        $errors[] = $param;
      }
    }
    return $errors;
  }
}

function ParamErrorsMessage($mandatory_params) {
  $errors = ParamErrors($mandatory_params);
  if (empty($errors)) {
    return "";
  } else {
    return "Errors have been found on the following fields: " . implode($errors, ", ");
  }
}