<?php
       class Rectangle
       {
         public $width;
         public $height;

         public function __construct($width, $height)
         {
             $this->width = $width;
             $this->height = $height;
         }
         public function getArea()
         {
            return $this->width * $this->height;
         }

        //tinh chu vi
         public function getPerimeter()
         {
            return (($this->width + $this->height) * 2);
         }

         public function display()
         {
            return "Rectangle{" . "width=" . $this->width . ", height=" . $this->height . "}";
         }
       } 
    $width  = 10;
    $height = 20;
    $rectangle = new Rectangle($width, $height);
    echo $rectangle->width; // 0utput: 10
    echo "<br>";
    echo $rectangle->height; // 0utput: 20
    echo "<br>";
    $rectangle->height = 30;
    $rectangle->width = 20;
    echo "<br>";
    echo $rectangle->height; // 0utput: 30
    echo "<br>";
    echo $rectangle->width; // 0utput: 20
    echo "<br>";
    echo $rectangle->getPerimeter(); // 0utput: 100
    echo "<br>";
    echo $rectangle->getArea(); // Output: 600
    echo "<br>";
    echo ("Your Rectangle". $rectangle->display());
  ?>