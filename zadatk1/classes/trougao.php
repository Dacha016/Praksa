<?php
require "geoTelo.php";
class Trougao extends GeoTelo{
    
// constructor
    public function __construct($stranaA,$stranaB,$stranaC){

        parent:: __construct($stranaA,$stranaB,$stranaC);
    }

// methods
    public  function proracunObima(){
        $obim=$this->stranaA+$this->stranaB+$this->stranaC;
        echo"<h3>Strane trougla:</h3><p>
        A - $this->stranaA cm </br>
        B - $this->stranaB cm </br>
        C - $this->stranaC cm </br>
        Obim trougla je: $obim cm</p>";
       
}
    public  function proracunPovrsine(){
        $s=($this->stranaA+$this->stranaB+$this->stranaC)/2;
        $povrsina=sqrt($s*($s-$this->stranaA)*($s-$this->stranaB)*($s-$this->stranaC));
        if(is_int($povrsina)){
            echo "<p>Povrsina trougla je: $povrsina cm2";
        }else{
            echo"<p>Trougao s tim dimenzijama nije moguc!!!</p>";
        }
        
    }
}

?>