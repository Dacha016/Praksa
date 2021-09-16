<?php
class Obim{
    private $stranaA;
    private $stranaB;
    private $stranaC;
// constructor
    public function __construct($stranaA,$stranaB,$stranaC)
    {
        
    }
// setters
    public function setStranaA($stranaA){
        $this->stranaA=$stranaA;
    }
    public function setStranaB($stranaB){
        $this->stranaB=$stranaB;
    }
    public function setStranaC($stranaC){
        $this->strtanaC=$stranaC;
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
}
?>