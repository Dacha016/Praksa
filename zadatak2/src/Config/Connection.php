<?php
namespace App\Config;
use PDO;
class Connection {
    protected $host ="localhost";
    protected $user="root";
    protected  $pass="";
    protected  $dbName="practice";
    protected  $conn;

    public function connect(){
        $this->conn=null;
        try{
            $this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->dbName, $this->user,$this->pass);
            //print_r($this->conn );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch(\PDOException $e){
            return false;
        }
        return $this->conn;  
    }    
}
?>