<?php   

// Crea una classe Employee, defineix com a atributs el seu nom i sou. 
// Definir un mètode initialize que rebi com a paràmetres el nom i sou. 
// Plantejar un segon mètode print que imprimeixi el nom i un missatge si ha de pagar o no impostos 
// (si el sou supera 6000, paga impostos).

class Empleado{
    
    private $nom;
    private $sou;

     public function initialize($nom,$sou) {
        $this->nom = $_POST['nom'];
        $this->sou = $_POST['sou'];
     }

    // public function __construct(){
    // $this->nom = $_POST['nom'];
    // $this->sou = $_POST['sou'];
    // }
  
    public function dades(){
        echo "Nom: " . $this->nom; 
        echo"<br>";
        echo "Sou: " . $this->sou;
    }

    public function impostos(){
        if ($this->sou > 6000) {
            echo $this->nom." te un sou de ".$this->sou." Euros,  SI ha de pagar impostos.";
        } 
            else {
            echo $this->nom." te un sou de ".$this->sou." Euros,  NO ha de pagar impostos.";
        }
    }
}       

$empleado1 = new Empleado();
echo"<br>";
$empleado1->initialize($_POST['nom'],$_POST['sou']);
echo"<br>";
$empleado1->dades();
echo"<br>";
$empleado1->impostos();

?>