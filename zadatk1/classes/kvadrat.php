<?php
//require "geoTelo.php";
use App\GeoTelo; 
class Kvadrat extends GeoTelo{
//constructor
    public function __construct($stranaA){
        parent::__construct($stranaA,$stranaB=null,$stranaC=null,$visina=null,$poluprecnik=null);
    }
//methods
    public function proracunObima(){
        $obim = 4* $this->stranaA;
        echo $obim;
    }
    public function proracunPovrsine(){
        $povrsina = $this->stranaA*$this->stranaA;
        echo $povrsina; 
    }
}
?>