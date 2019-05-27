<?php

require 'config.php';
require 'core/utils.php';
require 'core/Router.php';
require 'core/Request.php';
require 'core/DatabaseBuilder.php';
require 'core/DatabaseFile.php';

$app = new stdClass();
$app->request = new Request;
$app->router = new Router;
$app->config = new Config;
$app->db = DatabaseBuilder::getInstance();
