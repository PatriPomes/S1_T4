<?php

class Shape {

    private $alt;
    private $ampl;

   
    public function __construct($alt, $ampl){
        $this->alt=$alt;
        $this->ampl=$ampl;
    }
    
    public function area (){
        return $this->alt*$this->ampl;
    }
}




?>