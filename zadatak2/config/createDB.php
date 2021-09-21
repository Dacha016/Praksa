<?php
require_once "connection.php";

if($conn){
    $db = "CREATE DATABASE IF NOT EXISTS praksa;";
    $conn->query($db);
    return $conn;
    
}else {
    echo "Error creating database: " . $conn->error;
}

?>