<?php
require_once realpath("vendor/autoload.php");
// require_once "../config/connection.php";
// require_once "../models/Intern.php";
// use App\Config\Database as Database;
// use App\Models\Intern;

$database=new Database;

$db=$database->connect();

$intern= new Intern($db);

// $res=$intern->read();

// $n=$res->rowCount();

// if($n>0){
//     $inArr=[];
//     while($row= $res->fetch(PDO::FETCH_ASSOC)){
//         extract($row);
//         $in=[
//             "id"=>$row["id"],
//             "Name"=>$row["Name"],
//             "Surname"=>$row["Surname"]
//         ];
//         array_push($inArr,$in);
//     }
//     echo json_encode($inArr);
// }else{
//     echo json_encode(["Poruka:"=>"Ne postoje podaci"]);
// }
$res=$intern->create(["Name"=>"Rade","Surname"=>"Radic"]);
