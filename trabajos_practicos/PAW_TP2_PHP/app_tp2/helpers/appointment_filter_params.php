<?php

function MandatoryParams($params) {
  if (empty($params)) {
    return [];
  }
  return [
    "name"       => $params["name"],
    "email"      => $params["email"],
    "phone"      => $params["phone"],
    "shoes_size" => $params["shoes_size"],
    "birth_date" => $params["birth_date"],
    "date"       => $params["date"],
    "time"       => $params["time"],
  ];
}
