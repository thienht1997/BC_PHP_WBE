    <?php
    class Point2D
    {
        public $x;
        public $y;

        public function __construct($x = 0.0, $y = 0.0)
        {
            $this->x = $x;
            $this->y = $y;
        }

        public function getX()
        {
            return $this->x;
        }

        public function setX($newx)
        {
            $this->x = $newx;
        }

        public function getY()
        {
            return $this->y;
        }

        public function setY($newy)
        {
            $this->y = $newy;
        }

        public function getXY()
        {
            return array("x" => $this->x, "y" => $this->y);
        }

        public function setXY($newx, $newy)
        {
            $this->x = $newx;
            $this->y = $newy;
        }

        public function toString()
        {
            echo "(x,y) = (" .$this->x .", " .$this->y .")".";" ."<br>"; 
        }
    }
    ?>

</body>
</html>