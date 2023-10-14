<?php
//require('Peliculas.php');

class Empresa{
    public $locales=[];
    
    public function __construct(array $locales){
        $this->locales=$locales;
    }
    
    public function buscarCine($seleccion='cine2'){
        
        foreach($this->locales as $cines){
           if($cines->getNombre()==$seleccion){
               $cines->printDatosCin();
                $cines->printCartelera();
            }
        }
    }
    public function director($director='Lia'){
        
        
        foreach($this->locales as $cines){
            foreach($cines->getCartelera() as $pelicula){
                if($pelicula->getDirector()==$director)
                echo $cines->getNombre();
                echo '<br>';
            }
        } 

    }
    public function peliculaMasLarga($seleccion='cine1'){
        $tiempo=0;
        $masLarga='' ;
        foreach($this->locales as $cines){
            if ($cines->getNombre()==$seleccion){
                foreach($cines->getCartelera() as $pelicula){
                    if($pelicula->getDuracion()>$tiempo){
                     $tiempo=$pelicula->getDuracion();
                     $masLarga=$pelicula->getNombre();  
                }
            }
            }
            
        }return $tiempo.'  '.$masLarga;
    }

//     public function peliculaMasLarga(){
//         $tiempo=0;
//         $masLarga='' ;
//             foreach($this->getCartelera() as $pelicula){
//                 if($pelicula->getDuracion()>$tiempo){
//                     $tiempo=$pelicula->getDuracion();
//                     $masLarga=$pelicula->getNombre();  
//                 }
//             }
//             return $tiempo.'  '.$masLarga;
//     }
// }
}
?>