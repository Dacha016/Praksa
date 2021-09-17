<?php
namespace classes;
use model\GeoTelo; 
class Pravougaonik extends GeoTelo{
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