<?php

// session_start();

// require "vendor/autoload.php";

// $routes = new app\routes\Routes;
// $routes->getRoute();

echo "<pre>";
$array = rtrim(parse_url($_SERVER["REQUEST_URI"])["path"], "/");
print_r($array);
