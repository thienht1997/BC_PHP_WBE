<?php  
    include_once ('Point.php');
    class MoveablePoint extends Point{
        public $xSpeed;
        public $ySpeed;  

        public function __construct($x =0, $y =0, $xSpeed= 0, $ySpeed=0){
            parent::__construct($x, $y);
            $this->xSpeed = $xSpeed;
            $this->ySpeed = $ySpeed;
        }
        
        public function getXSpeed(){
            return $this->xSpeed;
        }

        public function getYSpeed(){
            return $this->ySpeed;
        }

        public function setXSpeed($newXspeed){
            $this->xSpeed = $newxSpeed;
        }

        public function setYSpeed($newYspeed){
            $this->ySpeed = $newYspeed;
        }

        public function getSpeed(){
            return array("Xspeed" => $this->xSpeed, "Yspeed" => $this->ySpeed);
        }

        public function setSpeed($newXspeed, $newYspeed){
            $this->xSpeed= $newXspeed;
            $this->ySpeed = $newYspeed;
        }

        public function toString(){
            echo "(xSpeed, ySpeed) =(" .$this->xSpeed .", " .$this->ySpeed .")"."<br>";
        }
        
        public function move(){
            $this->x += $this->xSpeed;
            $this->y += $this->ySpeed; 
        }
    }