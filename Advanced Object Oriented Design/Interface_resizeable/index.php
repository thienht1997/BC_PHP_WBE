<?php
include_once ('Circle.php');
include_once ('Rectangle.php');
include_once ('Square.php');
$circle = new Circle('Circle 01', 5);
echo 'Circle area: ' . $circle->calculateArea() . '<br />';
echo 'Circle resizeable: ' . $circle->resize(2) . '<br /><br />';

$rectangle = new Rectangle('Rectangle 01', 3 , 7);
echo 'Rectangle area: ' . $rectangle->calculateArea() . '<br />';
echo 'Rectangle resizeable : ' . $rectangle->resize(2) . '<br /><br />';

$square = new Square('Square 01', 5);
echo 'Rectangle area: ' . $square->calculateArea() . '<br />';
echo 'Rectangle resizeable: ' . $square->resize(4) . '<br />';