<?php
include_once ('Point2D.php');
include_once ('Point3D.php');
$Point1 = new Point2D();
$Point2 = new Point3D();
$Point1->toString();
$Point2->toString();
$Point1->setXY(5, 6);
$Point1->toString();
$Point2->setXYZ(1, 2 ,3);
$Point2->toString();
echo $Point2->getXYZ();
?>