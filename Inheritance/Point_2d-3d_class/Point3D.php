<?php
class Point3d extends Point2d
    {
        public $z;

        public function __construct($x = 0.0, $y = 0.0, $z = 0.0)
        {
            parent::__construct($x, $y);
            $this->z = $z;
        }

        function getZ()
        {
            return $this->z;

        }

        public function setZ($newz)
        {
            $this->x = $newz;

        }

        public function setXYZ($newx, $newy, $newz)
        {
            $this->x = $newx;
            $this->y = $newy;
            $this->z = $newz;
        }

        public function getXYZ()
        {
            return array("X" => $this->x, "Y" => $this->y, "Z" => $this->z);
        }

        public function toString()
        {
          echo "(x, y, z) = (" .$this->x .", " .$this->y ."," .$this->z .")".";"."<br>";
        }

    }
    ?>