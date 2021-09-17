<?php
use App\Krug;
use App\Pravougaonik;
use App\Kvadrat;
use App\Paralelogram;
use App\Trougao;
include "autoloader.php";


$p= new Pravougaonik(2,2);
$p->proracunObima();
 echo "</br>";
 $p->proracunPovrsine();
 echo "</br>";
 $k= new Krug(3);
 $k->proracunObima();
echo "</br>";
 $k->proracunPovrsine();
// $k= new Kvadrat(2);
// $k->proracunObima();
//   echo "</br>";
//  $k->proracunPovrsine()
// $p= new Paralelogram(5,3,2);
// $p->proracunObima();
// echo "</br>";
//$p->proracunPovrsine();
?>