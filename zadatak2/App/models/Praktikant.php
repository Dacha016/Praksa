<?php
//namespace Models;
//use Zaposleni;
require_once "Zaposleni.php";
class Praktikant extends Zaposleni{
    private $conn;
    private $table="Praktikanti";
 
//konstruktor
    public function __construct($db){
        $this->conn=$db;
    }

//metode
    public function kreiraj(){
        $q="INSERT INTO ".$this->table. "(Ime, Prezime) VALUES (".$this->Ime.", ". $this->Prezime.")";
        $stmt=$this->conn->prepare($q);
        var_dump($stmt);
      
        $stmt->execute([
            "Ime"=>$this->Ime,
            "Prezime"=>$this->Prezime
        ]);
        
        if($stmt->execute()){
            return true;
        }else{
            printf("Error");
        }
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