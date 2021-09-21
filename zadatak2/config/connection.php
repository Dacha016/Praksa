<?php
class Database {
    protected $host ="localhost";
    protected $user="root";
    protected $pass="";
    protected $coon;

    public function connect(){
        $this->conn=null;
        try{
            $this->conn = new PDO("mysql:host=$host;", $user,$pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $conn;
        }catch(Exception $e){
            return false;
        }
    } 
}
?>