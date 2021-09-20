<?php
namespace classes;
use model\GeoTelo; 
class Kvadrat extends GeoTelo{
    protected $stranaA; 
//constructor
    public function __construct($stranaA){
       $this->stranaA=$stranaA;
    }
//methods
    public function proracunObima(){
        $obim = 4* $this->stranaA;
        return $obim;
    }
    public function proracunPovrsine(){
        $povrsina = $this->stranaA*$this->stranaA;
        return $povrsina; 
    }
}
?>
