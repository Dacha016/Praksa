<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type:aplication/json");
require_once "../config/connection.php";
require_once "../models/Mentor.php";
//use Config\Database\Dadabase;
//use Models\Mentor\Mentor;

$database=new Database;

$db=$database->connect();

$mentor= new Mentor($db);

$res=$mentor->procitaj();
$n=$res->rowCount();
if($n>0){
    $mnArr=[];
    while($row= $res->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $mn=[
            "id"=>$row["idMentor"],
            "Ime"=>$row["Ime"],
            "Prezime"=>$row["Prezime"]
        ];
        array_push($mnArr,$mn);
    }
    echo json_encode($mnArr);
}else{
    echo json_encode(["Poruka"=>"Ne postoje podaci"]);
}
?>