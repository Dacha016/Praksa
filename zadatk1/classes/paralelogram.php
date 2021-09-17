<?php
namespace classes;
use model\GeoTelo; 
class Paralelogram extends GeoTelo{
    protected $visinaA;
//constructor
    public function __construct($stranaA,$stranaB,$visinaA){
        parent::__construct($stranaA,$stranaB,$stranaC=null,$visina=null,$poluprecnik=null);
        $this->setVisinaA($visinaA);
    }
//setters
    public function setVisinaA($visinaA){
        $this->visinaA=$visinaA;
    }
//getters
    public function getVisinaA(){
        return $this->visinaA;
    }
//methods
    public function proracunObima(){
        $obim=2*$this->stranaA+2*$this->stranaB;
        echo $obim;
    }
    public function proracunPovrsine(){
        $povrsina = $this->stranaA*$this->visinaA;
        echo $povrsina;
    }
}
?>