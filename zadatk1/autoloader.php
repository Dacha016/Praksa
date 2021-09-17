<?php
spl_autoload_register("myAutoloader");
function myAutoloader($className){
    $ext=".php";
    $fPath=strtolower($className) .$ext;
    include_once $fPath;
}
?>