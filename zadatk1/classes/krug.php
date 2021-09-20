<?php
namespace classes;
use model\GeoTelo; 
class Krug extends GeoTelo{
    protected $poluprecnik;
    const PI=3.14;
//constructor
public function __construct($poluprecnik){
    $this->$poluprecnik=$poluprecnik;
}

//methods
    public function proracunObima(){
        $obim=2*($this->poluprecnik*self::PI);
        return $obim;
    }
    public function proracunPovrsine(){
        $povrsina=($this->poluprecnik*$this->poluprecnik)*self::PI;
        return $povrsina;
    }
}
?>