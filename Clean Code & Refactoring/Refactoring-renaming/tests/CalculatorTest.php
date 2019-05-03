<?php
include __DIR__ . "/../src/Calculator.php";

$CalculatorTest = new Calculator();
echo "test addittion, result = " .$CalculatorTest->calculate(5, 7, ADDITION) ."<br>";
echo "test subtraction, result = " .$CalculatorTest->calculate(5, 7, SUBTRACTION) ."<br>";
echo "test mutiplication, result = " .$CalculatorTest->calculate(5, 7, MULTIPLICATION) ."<br>";
echo "test division, result = " .$CalculatorTest->calculate(5, 7, DIVISION) ."<br>";