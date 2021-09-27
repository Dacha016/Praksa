<?php
require realpath("vendor/autoload.php");
use App\Controllers\InternController;
use App\Config\Connection;
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$uri = explode( '/', $uri );
var_dump($uri);
 $requestMethod = $_SERVER["REQUEST_METHOD"];
$db= new Connection;
$db->connect();


$internC= new InternController($db,$requestMethod);
//var_dump($internC);
$internC->create(["Name"=>"Maksim","Surname"=>"Dimitrovski","idG"=>3]);
// $internC ->readAll();


?>