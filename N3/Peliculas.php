<?php

class Peliculas{

    private string $nombre;
    private int $duracion;
    private string $director;

    public function __construct (string $nombre,int $duracion,string $director){
        $this->nombre=$nombre;
        $this->duracion=$duracion;
        $this->director=$director;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getDuracion(){
        return $this->duracion;
    }
    public function getDirector(){
        return $this->director;
    }

    public function printDatos(){
        echo "Nombre: ".$this->nombre;
        echo'<br>';
        echo "Duracion: ".$this->duracion;
        echo'<br>';
        echo "Director: ".$this->director;
        echo'<br>';
        echo'<br>';
    }
    
}



?>