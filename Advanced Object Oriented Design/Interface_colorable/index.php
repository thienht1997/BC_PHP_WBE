<?php
include_once ('Circle.php');
include_once ('Cylinder.php');
include_once ('Rectangle.php');
include_once ('Square.php');
$circle = new Circle('Circle 01', 3);
echo 'Circle area: ' . $circle->calculateArea() . '<br />';
$cylinder = new Cylinder('Cylinder 01', 3 , 4);
echo 'Cylinder area: ' . $cylinder->calculateArea() . '<br />';
$rectangle = new Rectangle('Rectangle 01', 3 , 4);
echo 'Rectangle area: ' . $rectangle->calculateArea() . '<br />';
$square = new Square('Square 01', 4 , 4, 4);
echo 'Square Colorable: ' . $square->howToColor() . '<br />';