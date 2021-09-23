<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type:aplication/json");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, X-Requested-With");
require_once "../config/connection.php";
require_once "../models/Praktikant.php";
//use Models\Praktikant;


$database=new Database;
$db=$database->connect();

// $praktikant= new Praktikant($db);
// var_dump($praktikant);
// $res=$praktikant->procitaj();
// $n=$res->rowCount();

// if($n>0){
//     $prArr=[];
//     while($row= $res->fetch(PDO::FETCH_ASSOC)){
//         extract($row);
//         $pr=[
//             "id"=>$row["idPraktikant"],
//             "Ime"=>$row["Ime"],
//             "Prezime"=>$row["Prezime"]
//         ];
//         array_push($prArr,$pr);
//     }
//     echo json_encode($prArr);
// }else{
//     echo json_encode(["Poruka:"=>"Ne postoje podaci"]);
// }



//create

$praktikant= new Praktikant($db);

$data=json_decode(file_get_contents("php://input"));
$praktikant->Ime=$data->Ime;

$praktikant->Prezime=$data->Prezime;

$praktikant->kreiraj();

// if($praktikant->kreiraj()){
//     echo json_encode([
//         "poruka"=>"Post je kreiran"
//     ]);
// }else{
//     echo json_encode([
//         "poruka"=>"Post nije kreiran"
//     ]);
// }

?>

