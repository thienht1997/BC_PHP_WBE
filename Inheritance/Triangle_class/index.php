<?php
include_once ('Shape.php');
class Triangle extends Shape{
    private $side1;
    private $side2;
    private $side3;

    public function __construct($name = "Triangle", $side1= 1.0, $side2= 1.0, $side3= 1.0)
    {
        parent::__construct($name);
        $this->side1= $side1;
        $this->side2= $side2;
        $this->side3= $side3;
    }

    public function getArea(){
        return (sqrt(($this->side1+$this->side2+$this->side3)*($this->side1+$this->side2-$this->side3
        )*($this->side2+$this->side3-$this->side1)*($this->side3+$this->side1-$this->side1))/4);
    }

    public function getPerimeter(){
        return $this-side1 + $this->side2 +$this->side3;
    }

    public function toString(){
        echo "Triangle <br>side1 = " .$this->side1 ."<br> side2 =" .$this->side2 ." <br>side3 =" .$this->side3 ."<br>Area = "
        . (sqrt(($this->side1+$this->side2+$this->side3)*($this->side1+$this->side2-$this->side3
        )*($this->side2+$this->side3-$this->side1)*($this->side3+$this->side1-$this->side1))/4) ."<br>Perimeter = "
        .  ($this->side1 + $this->side2 +$this->side3);
    }

}
$newTriangle= new Triangle();
$newTriangle -> toString();
?>