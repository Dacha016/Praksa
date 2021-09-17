<?php
spl_autoload_register("myAutoloader");
function myAutoloader($className){
    $path="classes/";
    $ext=".php";
    $className= trim($className,"classes\/");
    $fPath=$path. strtolower($className) .$ext;
    if(!file_exists($fPath)){
        
        $path="";
        $ext=".php";
        $fPath=$path. strtolower($className) .$ext;  
    }
    
    include_once $fPath;
}
?>