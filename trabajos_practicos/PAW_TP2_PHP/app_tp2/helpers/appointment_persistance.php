<?php

function PersistAppointment($orm, $params, $image_encrypted_name) {
  if (empty($params)) {
    return FALSE;
  }
  $params["diagnostic"] = $image_encrypted_name;
  $appointment_code = GetAppointmentCode($params);
  $orm->set($appointment_code, $params);
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
      "phone"      => $apt["phone"],
      "date"       => $apt["date"],
      "time"       => $apt["time"],
    ];    
  }
  return $parsed_params;
}

function GetAppointmentCode($parsed_params) {
  $name  = $parsed_params["name"];
  $email = $parsed_params["email"];
  $date  = $parsed_params["date"];
  return hash("SHA256", time() . $name . $email . $date);
}
