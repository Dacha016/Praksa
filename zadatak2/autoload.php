<?php
spl_autoload_register("myAutoloader");
function myAutoloader($className){
    $fPath= str_replace("\\",DIRECTORY_SEPARATOR, $className) .".php";
    include_once $fPath;
}
?>