<?php
namespace App\Models;
abstract class Personnel{
// methods
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
    public  function create(Array $p){
        $q="INSERT INTO ".$this->table. " (Name,Surname) VALUES (:name, :surname)";
        
        try{
            $stmt=$this->conn->prepare($q);
            print_r($stmt);
            $stmt->bindParam(":name",$p["Name"]);
            $stmt->bindParam(":surname",$p["Surname"]);
            $stmt->execute();
            return $stmt;
        }catch(Exception $e){
            exit($e->getMessage());
        }
    }
    public function update($id, Array $p){
        $q="UPDATE ".$this->table." SET Name= :Name,Surname= :Surname WHERE id= :id";
        try{
            $stmt=$this->conn->prepare($q);
            $stmt->bindParam(":Name",$p["Name"]);
            $stmt->bindParam(":Surname",$p["Surname"]);
            $stmt->bindParam(":id",$id);
            $stmt->execute();
        
            return $stmt;
        }catch(PDOException $e){
            exit($e->getMessage());
        }
    }
    public function delete($id){
        $q="DELETE FROM ".$this->table." WHERE id= :id";
        try{
            $stmt=$this->conn->prepare($q);
            $stmt->bindParam(":id",$id);
            $stmt->execute();
            return $stmt;
        }catch(PDOException $e){
            exit($e->getMessage());
        }
    }
}
?>