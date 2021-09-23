<?php

namespace App\Models;
// use App\Models\Personnel; 
class Intern extends Personnel {
    private $conn;
    private $table="Intern";
 
//construct
    public function __construct(){
        $this->conn=$db;
        echo"Nene";
    }
    
    public function read(){
        $q="SELECT * FROM ".$this->table;
    
        try{
            $stmt=$this->conn->prepare($q);
            $stmt->execute();
            return $stmt;
        }catch(PDOException $e){
            exit($e->getMessage());
        }
    }
}
?>