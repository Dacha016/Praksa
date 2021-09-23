<?php
namespace App\Models;
// use App\Models\Personnel;

class Mentor extends Personnel{
    private $conn;
    private $table="Mentors";

 
// //konstruktor
    public function __construct(){
        $this->conn=$db;
       echo"Nene";
    }
}

?>