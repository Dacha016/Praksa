<?php
namespace App\Config;
class Connection {
    private $host ="localhost";
    private $user="root";
    private  $pass="";
    private  $dbName="practice";
    private  $conn;

    public function connect(){
        $this->conn=null;
        try{
            $this->conn = new \PDO("mysql:host=".$this->host.";dbname=".$this->dbName, $this->user,$this->pass);
            $this->conn->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
        }catch(\PDOException $e){
            return false;
        }
        return $this->conn;  
    }    
}
?>