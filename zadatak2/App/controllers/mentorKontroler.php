<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type:aplication/json");
require_once "../config/connection.php";
require_once "../vendor/autoload.php";
use Models;

$database=new Database;

$db=$database->connect();

$praktikant= new Mentor($db);

$res=$praktikant->procitaj();
$n=$res->rowCount();
if($n>0){
    $prArr=[];
    while($row= $res->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $pr=[
            "id"=>$row["idMentora"],
            "Ime"=>$row["Ime"],
            "Prezime"=>$row["Prezime"]
        ];
        array_push($prArr,$pr);
    }
    echo json_encode($prArr);
}else{
    echo json_encode(["Poruka:"=>"Ne postoje podaci"]);
}
?>