<?php

class Praktikant extends Zaposleni{
    private $conn;
    private $table="Praktikanti";
 
//konstruktor
    public function __construct($db){
        $this->conn=$db;
    }
    
<<<<<<< HEAD:zadatak2/models/Praktikant.php
//Read
    public function read(){
=======
//metode
    public function kreiraj(){

    }
    public function procitaj(){
>>>>>>> f17d70c1f2631ef901836ea7c533534d9aa720ac:zadatak2/App/models/Praktikant.php
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