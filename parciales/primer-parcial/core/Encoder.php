<?php

class Encoder
{
  public $data;

  public function __construct()
  {
    $this->data = [];
  }

  public function set($survey_code, $parsed_params) {
    $database = $app->root_path . 'db/encoded_data.json';
    $str = file_get_contents($database);
    $data = json_decode($str, true);
    $data[$survey_code] = $parsed_params;
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

  public function get_all_languajes(){
    $database = $app->root_path . 'db/languajes_data.json';
    $str = file_get_contents($database);
    return json_decode($str, true);
  }

  public function get($survey_code){
    $database = $app->root_path . 'db/encoded_data.json';
    $str = file_get_contents($database);
    $data = json_decode($str, true);
    return $data[$survey_code];
  }
}
