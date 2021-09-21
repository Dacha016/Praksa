<?php
class Praktikant{
    private $conn;
    private $table="Praktikanti";
    public $id;
    public $ime;
    public $prezime;

//constructor
    public function __construct($db){
        $this->conn=$db;
    }
    
//Read
    public function read(){
        $q="SELECT * FROM ".$this->table;
        $stmt=$this->conn->prepare($q);
        $stmt->execute();
        return $stmt;
    }
}

?>