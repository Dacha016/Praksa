<?php
require realpath("vendor/autoload.php");
use App\Controllers\InternController;
use App\Config\Connection;
use App\Routes\Router;



 function processRequest(){
    $db = new Connection;
    $db = $db->connect();
     
    $requestMethod = $_SERVER["REQUEST_METHOD"];
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    
    $uri = explode( '/', $uri );
    
    $internId= (int)$_GET["id"]?(int)$_GET["id"]:null;
    $internC = new InternController($db,$requestMethod,$internId);
    switch ($requestMethod){
        case 'GET':
            if ($internId){
                $response = $internC->read($internId);
            } else{
                $response = $internC->readAll();
            };
            break;
        case 'POST':
            $response = $internC->create();
            break;
        case 'PUT':
            $response = $internC->update($internId);
            break;
        case 'DELETE':
            $response = $internC->delete($internId);
            break;
    }
}
processRequest();


?>