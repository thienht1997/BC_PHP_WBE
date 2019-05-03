<?php
include_once ('Shape.php');
include_once ('Resizeable.php');
class Square extends Shape implements Resizeable{
 public function __construct($name, $width)
 {
 parent::__construct($name);
 $this->width = $width;
 }

 public function calculateArea(){
    return $this->width*4;
}

 public function resize($percent){
    return  (($this->width*4)*($percent));
}
}
?>