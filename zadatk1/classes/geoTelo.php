<?php
abstract class GeoTelo{
    protected $stranaA;
    protected $stranaB;
    protected $stranaC;
    protected $stranaD;
 
// constructor
    public function __construct($stranaA,$stranaB,$stranaC)
    {
        $this->setStranaA($stranaA);
        $this->setStranaB($stranaB);
        $this->setStranaC($stranaC);
        

    }
// setters
    public function setStranaA($stranaA){
        $this->stranaA=$stranaA;
    }
    public function setStranaB($stranaB){
        $this->stranaB=$stranaB;
    }
    public function setStranaC($stranaC){
        $this->stranaC=$stranaC;
    }
    public function setStranaD($stranaD){
        $this->stranaD=$stranaD;
    }

    public function setPrecnik($precnik){
        $this->precnik=$precnik;
    }
// getters
    public function getStranaA(){
        return $this->stranaA;
    }
    public function getStranaB(){
        return $this->stranaB;
    }
    public function getStranaC(){
        return $this->stranaC;
    }
    public function getStranaD(){
        return $this->stranaD;
    }

    public function getPrecnik(){
        return $this->precnik;
    }
// methods
public abstract function proracunObima();
public abstract function proracunPovrsine();
}
?>