<?php
require "models/paralelogram.php";
//require "models/kvadrat.php";
//require "models/krug.php";
//require "models/pravougaonik.php";

// $p= new Pravougaonik(2,2);
// $p->proracunObima();
// echo "</br>";
// $p->proracunPovrsine();
//  $k= new Krug(3);
//  $k->proracunObima();
//  echo "</br>";
//  $k->proracunPovrsine();
// $k= new Kvadrat(2);
// $k->proracunObima();
//   echo "</br>";
//  $k->proracunPovrsine()
$p= new Paralelogram(5,3,2);
$p->proracunObima();
echo "</br>";
$p->proracunPovrsine();
?>