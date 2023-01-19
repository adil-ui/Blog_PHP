<?php 
include "../routes/routes.php";
require '../vendor/autoload.php';

$url = $_GET["url"] ? $_GET["url"] : "home";

if(array_key_exists($url, $routes)) {
  $controller = $routes["$url"];
  $path = "../controllers/" . $controller;
  if(file_exists($path)) {
    require_once $path;
  } else {
    require_once "../views/page404.php";
  }
} else {
    require_once "../views/page404.php";
}