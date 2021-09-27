<?php
require realpath("vendor/autoload.php");
use App\Controllers\InternController;
use App\Config\Connection;

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode( '/', $uri );

$requestMethod = $_SERVER["REQUEST_METHOD"];
$db= new Connection;
$db->connect();


$internC= new InternController($db,$requestMethod,2);


print_r($internC);
?>