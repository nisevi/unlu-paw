<?php

class Encoder
{
  public $data;

  public function __construct()
  {
    $this->data = [];
  }

  public function set($appointment_code, $parsed_params) {
    $database = $app->root_path . 'db/encoded_data.json';
    $str = file_get_contents($database);
    $data = json_decode($str, true);
    $data[$appointment_code] = $parsed_params;
    $fp = fopen($database, 'w');
    fwrite($fp, json_encode($data));
    fclose($fp);
    $this->data = $data;
  }

  public function get_all(){
    $database = $app->root_path . 'db/encoded_data.json';
    $str = file_get_contents($database);
    return json_decode($str, true);
  }

  public function get($appointment_code){
    $database = $app->root_path . 'db/encoded_data.json';
    $str = file_get_contents($database);
    $data = json_decode($str, true);
    return $data[$appointment_code];
  }
}
