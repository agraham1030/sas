<?php

function urlFor($script_path) {
  // add the leading '/' if not present
  if($script_path[0] != '/') {
    $script_path = "/" . $script_path;
  }
  return WWW_ROOT . $script_path;
}

function u($string="") {
  return urlencode($string);
}

function rawU($string="") {
  return rawurlencode($string);
}

function h($string="") {
  return htmlspecialchars($string);
}

function error404() {
  header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
  exit();
}

function error500() {
  header($_SERVER["SERVER_PROTOCOL"] . " 500 Internal Server Error");
  exit();
}

function redirectTo($location) {
  header("Location: ".$location);
  exit();
}

function isPostRequest() {
  return $_SERVER['REQUEST_METHOD'] == 'POST';
}

function isGetRequest() {
  return $_SERVER['REQUEST_METHOD'] == 'GET';
}

?>
