<?php
include_once(dirname(__FILE__) . '/../AbstractClass/Fruit.php');

class Apple extends Fruit
{
    public function howToEat()
    {
        return "Apple could be slided";
    }
}
?>