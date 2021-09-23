<?php
require_once realpath("vendor/autoload.php");
//require_once "src/config/connection.php";
// //require_once "src/models/Intern.php";
// use App\Config\Database as Database;
// use App\Models\Intern;
// use App\Models\Mentor;
echo "dada";
$database=new Database;

$db=$database->connect();


$intern= new Intern($db);

$res=$intern->read();

$n=$res->rowCount();

if($n>0){
    $inArr=[];
    while($row= $res->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $in=[
            "id"=>$row["id"],
            "Name"=>$row["Name"],
            "Surname"=>$row["Surname"]
        ];
        array_push($inArr,$in);
    }
    echo json_encode($inArr);
}else{
    echo json_encode(["Poruka:"=>"Ne postoje podaci"]);
}
// $res=$intern->create(["Name"=>"Rade","Surname"=>"Radic"]);

?>