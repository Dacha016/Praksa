<<<<<<< HEAD
s (28 sloc)  672 Bytes
   
   <?php
   header("Access-Control-Allow-Origin: *");
   header("Content-Type:aplication/json");
   include_once "../config/connection.php";
   include_once "../models/Praktikant.php";
   
   $database=new Database;
   $db=$database->connect();
   $praktikant= new Praktikant($db);
   
   $res=$praktikant->read();
   
   $n=$res->rowCount();
   
   if($n>0){
       $prArr=[];
      
       while($row= $res->fetch(PDO::FETCH_ASSOC)){
           extract($row);
           $pr=[
               "id"=>$row["idPraktikant"],
               "Ime"=>$row["Ime"],
               "Prezime"=>$row["Prezime"]
           ];
           array_push($prArr,$pr);
       }
       echo json_encode($prArr);
   }else{
   
       echo 
           "Poruka Ne postoje podaci"
       ;
   }
   ?>
=======
<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type:aplication/json");
include_once "../config/connection.php";
include_once "../models/Praktikant.php";

$database=new Database;
$db=$database->connect();
$praktikant= new Praktikant($db);

$res=$praktikant->read();

$n=$res->rowCount();

if($n>0){
    $prArr=[];
   
    while($row= $res->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $pr=[
            "id"=>$row["idPraktikant"],
            "Ime"=>$row["Ime"],
            "Prezime"=>$row["Prezime"]
        ];
        array_push($prArr,$pr);
    }
    echo json_encode($prArr);
}else{

    echo 
        "Poruka Ne postoje podaci"
    ;
}
?>
>>>>>>> d8727ef44ca2f05d217e1c79ca904bc9ebddd3c2
