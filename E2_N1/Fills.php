<?php
 require 'Shape.php';

 class Triangle extends Shape{

    public function area_triangle(){
       echo "L'area del triangle es ". $this->area()/2;

    }
  }   
class Rectangle extends Shape{

   public function area_rectangle(){
      echo "L'area del rectangle es ". $this->area();

   }
 }   

    $triangle1=new Triangle(2,5);
    $triangle1->area_triangle();
echo"<br>";
    $rectangle1=new Rectangle(6,3);
    $rectangle1->area_rectangle();


?>