<?php
//namespace Config;
class Database {
    private $host ="localhost";
    private $user="root";
    private  $pass="";
    private  $dbName="praksa";
    private  $conn;

    public function connect(){
        $this->conn=null;
        
        try{
            $this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->dbName, $this->user,$this->pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            
        }catch(Exception $e){
            return false;
        }
        return $this->conn;
        
    }    
}
?>