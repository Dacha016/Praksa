<?php
namespace App;
//require "geoTelo.php";
use App\GeoTelo; 
class Krug extends GeoTelo{
    const PI=3.14;
//constructor
public function __construct($poluprecnik){
    parent:: __construct($stranaA=null,$stranaB=null,$stranaC=null,$visina=null,$poluprecnik);
}
//methods
    public function proracunObima(){
        $obim=2*($this->poluprecnik*self::PI);
        echo $obim;
    }
    public function proracunPovrsine(){
        $povrsina=($this->poluprecnik*$this->poluprecnik)*self::PI;
        echo $povrsina;
    }
}
?>