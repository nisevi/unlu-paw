<?php

function MandatoryParams($params) {
  if (empty($params)) {
    return [];
  }
  return [
    "name"     => $params["name"],
    "email"    => $params["email"],
    "languaje" => $params["languaje"],
  ];
}
