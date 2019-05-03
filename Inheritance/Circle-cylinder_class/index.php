<?php
include_once ('Circle.php');
include_once ('Cylinder.php');
$newCircle = new Circle(5, "red");
$newCylinder = new Cylinder(5, "red", 10);
$newCircle->toString();
$newCylinder->toString();
?>