<?php
use classes\Krug;
use classes\Pravougaonik;
use classes\Kvadrat;
use classes\Paralelogram;
use classes\Trougao;
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