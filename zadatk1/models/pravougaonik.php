<?php
require "classes/geoTelo.php";
class Pravougaonik extends geoTelo{
//constructor
    public function __construct($stranaA,$stranaB){
        parent:: __construct($stranaA,$stranaB,$stranaC=null,$visina=null,$poluprecnik=null);
    }
//methods
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