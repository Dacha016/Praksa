<?php
namespace App\Models;
use App\Models\Personnel;

class Group extends Personnel{
    protected $conn;
    protected $table="Groups";
    
// //konstruktor
    public function __construct($db){
        $this->conn=$db;
    }
// methods
public  function create(Array $p){
    $q="INSERT INTO ".$this->table. " (Title) VALUES (:title )";
    
    try{
        $stmt=$this->conn->prepare($q);
        print_r($stmt);
        $stmt->bindParam(":title",$p["Title"]);
        $stmt->execute();
        return $stmt;
    }catch(\PDOException $e){
        exit($e->getMessage());
    }
}
public function update($id, Array $p){
    $q="UPDATE ".$this->table." SET Title= :title WHERE id= :id";
    try{
        $stmt=$this->conn->prepare($q);
        $stmt->bindParam(":title",$p["Title"]);
        $stmt->bindParam(":id",$id);
        $stmt->execute();
    
        return $stmt;
    }catch(\PDOException $e){
        exit($e->getMessage());
    }
}
}
?>