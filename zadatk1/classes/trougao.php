<?php
namespace classes;
use model\GeoTelo; 
class Trougao extends GeoTelo{
    
// constructor
    public function __construct($stranaA,$stranaB,$stranaC){

        parent:: __construct($stranaA,$stranaB,$stranaC,$visina=null,$poluprecnik=null);
    }

// methods
    public function proracunObima(){
        $obim=$this->stranaA+$this->stranaB+$this->stranaC;
        echo $obim;
       
}
    public function proracunPovrsine(){
        $s=($this->stranaA+$this->stranaB+$this->stranaC)/2;
        $povrsina=sqrt($s*($s-$this->stranaA)*($s-$this->stranaB)*($s-$this->stranaC));
        if(is_int($povrsina)){
            echo "Povrsina trougla je: $povrsina cm2";
        }else{
            echo"Trougao s tim dimenzijama nije moguc!!!";
        }
    }
}

?>