<?php
namespace App\Models;

use App\Models\Personnel; 
class Intern extends Personnel {
    protected $conn;
    protected $table="Interns";
 
//construct
    public function __construct($d){
        $this->conn;
        
    }
}
?>