<?php
spl_autoload_register("myAutoloader");
function myAutoloader($className){
    $path="classes/";
    $ext=".php";
    $className= trim($className,"App\/");
    $fPath=$path. strtolower($className) .$ext;
    include_once "$fPath";
}
?>