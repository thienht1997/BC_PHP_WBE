<?php
/**
 * Created by PhpStorm.
 * User: phanluan
 * Date: 26/10/2018
 * Time: 22:56
 */
include __DIR__ . "/../src/Cylinder.php";

$cylinder = new Cylinder();
echo "Test calculate volume: " .$cylinder->getVolume(5,7) ."<br>";
echo "Test calculate perimeter: " .$cylinder->getPerimeter(5) ."<br>";
echo "Test calculate area: " .$cylinder->getBaseArea(5) ."<br>";