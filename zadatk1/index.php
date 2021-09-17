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
$kv= new Kvadrat(2);
 $kv->proracunObima();
   echo "</br>";
 $kv->proracunPovrsine();
$pa= new Paralelogram(5,3,2);
$pa->proracunObima();
echo "</br>";
$pa->proracunPovrsine();
?>