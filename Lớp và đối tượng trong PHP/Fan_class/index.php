<!DOCTYPE html>
<html>
<head>
	<title>StopWatch</title>
</head>
<body>
    <?php  
    class Fan
    {
        public $SLOW = 1;
        public $MEDIUM = 2;
        public $FAST = 3;
        public $speed = "SLOW";
        private $on = false;
        private $radius = 5;
        private $color = "blue";
        
        public function  setStatus($value)
        {
            $this->on =$value;
        }
        public function  setSpeed($value)
        {
            $this->value =$speed;
        }
        public function toString(){
            if($this->on){
                echo "Fan is on with speed = " .$this->speed ."; color = " .$this->color ."; radius " .$this->radius."." ."<br>"; 
            }
            else{
                echo "Fan is off with color = " .$this->color ."; radius " .$this->radius."." ."<br>"; 
            }
        }
        
    }
    $newFan = new Fan();
    $newFan -> toString();
    $newFan -> setStatus(true);
    $newFan -> toString();

    ?>
</body>
</html>	