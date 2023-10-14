<?php

class PokerDice{
   
    public $faces = ['As', 'K', 'Q', 'J', '7', '8'];
    private $lastThrow;
    private static $totalThrows;

   public function __construct(){
    $this->lastThrow=null;
   }
 
    public function throw() {
        $opcio=array_rand($this->faces);
        self::$totalThrows++;
        return  $this->lastThrow=$this->faces[$opcio];
    }
    public function shapeName(){
        if ($this->lastThrow==null){
            return "No has iniciat cap tirada";
        }else{
             echo "En l'ultima tirada ha sortit: ". $this->lastThrow;
        }
    }
    public function moltsDaus($daus=5){
       $dau='';
        
        for ($cont=0; $cont<$daus; $cont++) {
            $dau.="Dau ".($cont+1).": ".$this->throw ().'<br>'; 
               
        }
        self::$totalThrows=1;
       return $dau;
    }
       
    
    public static function  getTotalThrows(){
        
        return self::$totalThrows;
    }
}
    $tirada = new PokerDice();
    echo "tiro un dado varias veces... <br>";
    echo  $tirada->throw();
    echo '<br>';
    echo $tirada->throw();
    echo '<br>';
    echo $tirada->throw();
    echo '<br>';
    echo  $tirada->throw();
    echo '<br>';
    echo $tirada->shapeName();
    echo '<br>';
    echo $tirada->moltsDaus(5);
        
    echo "Número total de tirades: " . PokerDice::getTotalThrows();
    
 
?>