<?php

require "models/pravougaonik.php";

$p= new Pravougaonik(2,2);
$p->proracunObima();
echo "</br>";
$p->proracunPovrsine();
?>