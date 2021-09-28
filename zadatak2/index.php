<?php

require realpath("vendor/autoload.php");
use App\Controllers\InternController;
use App\Config\Connection;
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$uri = explode( '/', $uri );
processRequest();
 function processRequest(){
    $db = new Connection;
    $db = $db->connect();
     
    $requestMethod = $_SERVER["REQUEST_METHOD"];
    $internId = null;
if (isset($uri[2])) {
    $internId = (int) $uri[2];
}

$internC = new InternController($db,$requestMethod,$internId);
    switch ($requestMethod){
        
        case 'GET':
            if ($internId) {
                $response = $internC->read($internId);
            } else {
                $response = $internC->readAll();
                
            };
            break;
        case 'POST':
            $response = $internC->create([]);
           
            break;
        case 'PUT':
            $response = $internC->update($internC->internId);
            break;
        case 'DELETE':
            $response = $internC->delete($internId);
            break;
      
    }
  
}

?>