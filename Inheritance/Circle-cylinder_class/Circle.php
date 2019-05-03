<?php
class Circle {
 public $radius;
 public $color;

 public function __construct($radius, $color)
 {
     $this->radius = $radius;
     $this->color = $color;
 }

 public function getRadius(){
    return $this->radius;
 }

 public function getColor(){
    return $this->color;
 }

 public function setRadius($new_radius){
    $this->new_radius = $radius;
 }

 public function setColer($new_color){
    $this->new_color = $color;
 }

 public function calculateArea(){
     return pi() * pow($this->radius, 2);
 }

 public function calculatePerimeter(){
     return pi() * $this->radius * 2;
 }

 public function toString(){
    echo "Circle Radius = " .$this->radius . "; Color: " .$this->color ."; Perimeter= ".$this->calculatePerimeter(). "; Area: " .$this-> calculateArea() ."<br>";
}
}
?>