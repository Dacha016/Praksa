<?php
spl_autoload_register("myAutoloader");
function myAutoloader($className){
    $path="";
    $ext=".php";
    $fPath=$path. strtolower($className) .$ext;
    include_once $fPath;
}
?>