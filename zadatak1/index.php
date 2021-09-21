<?php
use classes\Krug;
use classes\Pravougaonik;
use classes\Kvadrat;
use classes\Paralelogram;
use classes\Trougao;
include "autoloader.php";


$p= new Pravougaonik(2,6);
echo $p->proracunObima();
echo "</br>";
echo $p->proracunPovrsine();
echo "</br>";
$k= new Krug(6);
echo $k->proracunObima();
echo "</br>";
echo $k->proracunPovrsine();
$kv= new Kvadrat(4);
echo $kv->proracunObima();
echo "</br>";
echo $kv->proracunPovrsine();
$pa= new Paralelogram(5,5,3);
echo $pa->proracunObima();
echo "</br>";
echo $pa->proracunPovrsine();
?>