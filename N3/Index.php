<?php

require('Cines.php');
require('Peliculas.php');
require('Empresa.php');

$pelicula=new Peliculas("aaaaa",60, 'carlos');
$pelicula1=new Peliculas("lllll",90, 'Lucas');
$pelicula2=new Peliculas('kkkkKKKK',200, 'maria');
$pelicula3=new Peliculas("fgsfgas",120, 'Roc');
$pelicula4=new Peliculas("lllll",45, 'Lia');

$cartelera=array();
$cartelera1=array();
$cartelera2=array();
array_push($cartelera, $pelicula, $pelicula1,$pelicula2,$pelicula3,$pelicula4);
array_push($cartelera1, $pelicula, $pelicula2, $pelicula3);
array_push($cartelera2, $pelicula1,$pelicula3,$pelicula4);

$cines1 = new Cines('cine1', 'pob1', $cartelera1);
$cines2 = new Cines('cine2', 'pob2', $cartelera2);
$cines3 = new Cines('cine3', 'pob3', $cartelera);

$locales=array();
array_push($locales, $cines1,$cines2,$cines3);

echo'<br>';
echo'<br>';
echo'<br>';

$empresa=new Empresa($locales);
 
echo'<br>';

$empresa->buscarCine('cine1');
echo'<br>';
echo $empresa->peliculaMasLarga('cine2');
echo'<br>';
echo $empresa->director('Lia');

?>