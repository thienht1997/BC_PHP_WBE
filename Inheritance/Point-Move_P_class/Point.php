<?php  
    class Point{
        public $x;
        public $y;  

        public function __construct($x =0, $y =0){
            $this->x = $x;
            $this->y = $y;
        }
        
        public function getX(){
            return $this->x;
        }

        public function getY(){
            return $this->y;
        }

        public function setX($newx){
            $this->x = $newx;
        }

        public function setY($newy){
            $this->y = $newy;
        }

        public function getXY(){
            return array("x" => $this->x, "y" => $this->y);
        }

        public function setXY($newX, $newY){
            $this->x= $newX;
            $this->y = $newY;
        }

        public function toString(){
            echo "(x, y) = (" .$this->x .", " .$this->y .")" ."<br>";
        }
    }