<?php

class Praktikant extends Zaposleni{
    private $conn;
    private $table="Praktikanti";
 
//konstruktor
    public function __construct($db){
        $this->conn=$db;
    }
    
//metode
    public function kreiraj(){

    }
    public function procitaj(){
        $q="SELECT * FROM ".$this->table;
        $stmt=$this->conn->prepare($q);
        $stmt->execute();
        return $stmt;
    }
    public function izmeni(){

    }
    public function obrisi(){

    }
}

?>