<?php
namespace classes;
use model\GeoTelo; 
class Paralelogram extends GeoTelo{
    protected $stranaA;
    protected $stranaB;
    protected $visinaA;
//constructor
    public function __construct($stranaA,$visinaA,$stranaB){
        $this->stranaA=$stranaA;
        $this->stranaB=$stranaB;
        $this->visinaA=$visinaA;
    }
//methods
    public function proracunObima(){
        $obim=2*$this->stranaA+2*$this->stranaB;
        return $obim;
    }
    public function proracunPovrsine(){
        $povrsina = $this->stranaA*$this->visinaA;
        return $povrsina;
    }
}
?>