<?php
require "classes/geoTelo.php";
class Pravougaonik extends geoTelo{
public function __construct($stranaA,$stranaB){
    parent:: __construct($stranaA,$stranaB,$stranaC=null,$visina=null,$precnik=null);
}
public function proracunObima(){
    $obim=($this->stranaA+$this->stranaB)*2;
    echo $obim;
}
public function proracunPovrsine(){
    $povrsina=$this->stranaA*$this->stranaB;
    echo $povrsina;
}
}
?>