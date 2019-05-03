<?php
include_once ('Circle.php');
class Cylinder  extends Circle {
 public $hight;

 public function __construct($radius, $color, $hight)
 {
     parent::__construct($radius, $color);
     $this->hight = $hight;
 }

 public function getVolume(){
    return (pi() * pow($this->radius, 2) * $this->hight);
}
public function toString(){
    echo "Cylinder Radius = " .$this->radius . "; Hight = " .$this->hight ."; Color: " .$this->color ."; Perimeter= ".$this->calculatePerimeter(). "; Area: " .$this-> calculateArea(). "; Volume =" .$this->getVolume()."<br>";
}
}
?>