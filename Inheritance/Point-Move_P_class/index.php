<?php
    include_once ('Point.php');
    include_once ('MovablePoint.php');
    $point = new Point ();
    $move = new MoveablePoint();
    $point -> toString();
    $move -> toString();
    $point -> setXY(4,5);
    $point -> toString();
    $move -> setSpeed(7,8);
    $move -> toString();
?>