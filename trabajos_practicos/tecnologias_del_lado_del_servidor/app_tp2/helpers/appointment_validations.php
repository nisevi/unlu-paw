<?php

function ValidName($name) {
  return isset($name);
}

function ValidEmail($email) {
  return isset($email) && filter_var($email, FILTER_VALIDATE_EMAIL);
}

function ValidPhone($phone) {
  return isset($phone);
}

function ValidAge($age) {
  return intval($age) >= 0 && intval($age) <= 110;
}

function ValidShoesSize($shoes_size) {
  if (!(empty($shoes_size))){
	  return intval($shoes_size) >= 20 && intval($shoes_size) <= 45; 
	  
  } else { 
	return true;
  }
}

function ValidHeight($height) {
  if (!(empty($height))){
	  return intval($height) >= 30 && intval($height) <= 250; 
	  
  } else { 
	return true;
  }  
}

function ValidBirthDate($birth_date) {
  return isset($birth_date) && $birth_date < date("Y-m-d");
}

function ValidDate($date) {
  return isset($date) && $date >= date("Y-m-d");
}

function ValidTime($time) {
   if (!(empty($time))){
	  $timeComplete = explode(":", $time);
	  $minute = $timeComplete[1];   
	  return intval($minute) == 00 || intval($minute) == 15 || intval($minute) == 30 || intval($minute) == 45;	  
  } else { 
	return true;
  } 
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