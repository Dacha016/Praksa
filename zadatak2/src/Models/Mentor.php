<?php
namespace App\Models;
use App\Models\Personnel;

class Mentor extends Personnel{
    protected $conn;
    protected $table="Mentors";
    
// //konstruktor
    public function __construct($db){
        $this->conn=$db;
    }
}

?>