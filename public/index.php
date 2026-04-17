<?php 

require_once "../core/route.php";
$url = $_GET["url"] ?? "home";

$route = new Router();
$route->handle($url);