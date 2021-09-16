<?php
require "models/krug.php";

 //require "models/pravougaonik.php";

// $p= new Pravougaonik(2,2);
// $p->proracunObima();
// echo "</br>";
// $p->proracunPovrsine();
 $k= new Krug(3);
 $k->proracunObima();
 echo "</br>";
 $k->proracunPovrsine();
 
?>