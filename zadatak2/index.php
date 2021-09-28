<?php
header("Access-Control-Allow-Methods:GET,POST,PUT,DELETE");
require realpath("vendor/autoload.php");
use App\Controllers\InternController;
use App\Config\Connection;




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
            
            if ($internId) {
                $response = $internC->read($internId);
            } else {
                $response = $internC->readAll();
            };
            break;
        case 'POST':
            $response = $internC->create();
            var_dump($response);
            break;
        case 'PUT':
          
            $response = $internC->update($internId,$input);
            var_dump($response);
            break;
        case 'DELETE':
            
            $response = $internC->delete($internId);
            var_dump($response);
            break;
      
    }
  
}
processRequest();
?>