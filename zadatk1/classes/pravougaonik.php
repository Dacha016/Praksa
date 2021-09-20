<?php
namespace classes;
use model\GeoTelo; 
class Pravougaonik extends GeoTelo{
    protected $stranaA;
    protected $stranaB;
//constructor
    public function __construct($stranaA,$stranaB){
      $this->stranaA=$stranaA;
      $this->stranaB=$stranaB;
    }
//methods
    public function proracunObima(){
        $obim=($this->stranaA+$this->stranaB)*2;
        return $obim;
    }
    public function proracunPovrsine(){
        $povrsina=$this->stranaA*$this->stranaB;
        return $povrsina;
    }
}
?>