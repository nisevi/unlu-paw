<?php

$title = "Primer Parcial";
$main_title = "Elije tu lenguaje";
$subtitle = "Fields marked with an asterisk (*) are required";
$content = "require 'index.content.view.php';";
$error = "";
$languajes = $app->orm->get_all_languajes()["languajes"];

require $app->root_path . "views/index.view.php";
