<?php

class Cines{

    private string $nombre;
    private string $poblacion;
    private  $cartelera=[];

    public function __construct(string $nombre,string $poblacion, $cartelera){
        $this->nombre=$nombre;
        $this->poblacion=$poblacion;
        $this->cartelera=$cartelera;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getPoblacion(){
        return $this->poblacion;
    }
    public function getCartelera(){
        return $this->cartelera;
    }
    public function printDatosCin(){
        echo "Nombre: ".$this->nombre;
        echo'<br>';
        echo "Poblacion: ".$this->poblacion;
        echo'<br>';
        echo'<br>';
    }
    public function printCartelera(){
            foreach ($this->cartelera as $pelicula){
            $pelicula->printDatos();
        } 
    }
   
}


?>