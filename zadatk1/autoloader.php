<?php
spl_autoload_register("myAutoloader");
function myAutoloader($className){
    $ext=".php";
    $fPath= str_replace("\\",DIRECTORY_SEPARATOR, strtolower($className)) .$ext;
    include_once $fPath;
}
?>