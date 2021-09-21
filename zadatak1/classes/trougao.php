<?php
namespace classes;
use model\GeoTelo; 
class Trougao extends GeoTelo{
    protected $stranaA;
    protected $stranaB;
    protected $stranaC;
// constructor
    public function __construct($stranaA,$stranaB,$stranaC){
        $this->stranaA=$stranaA;
        $this->stranaB=$stranaB;
        $this->stranaC=$stranaC;
    }
// methods
    public function proracunObima(){
        $obim=$this->stranaA+$this->stranaB+$this->stranaC;
        return $obim;
}
    public function proracunPovrsine(){
        $s=($this->stranaA+$this->stranaB+$this->stranaC)/2;
        $povrsina=sqrt($s*($s-$this->stranaA)*($s-$this->stranaB)*($s-$this->stranaC));
        if(is_int($povrsina)){
            return "Povrsina trougla je: $povrsina cm2";
        }else{
            return "Trougao s tim dimenzijama nije moguc!!!";
        }
    }
}

?>