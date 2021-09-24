<?php
namespace App\Controllers;
require realpath("../../vendor/autoload.php");
use App\Config\Connection;
use App\Models\Intern;

$database=new Connection;
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
$res=$intern->create(["Name"=>"Mara","Surname"=>"Simic"]);
