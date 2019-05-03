
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = (int)$_POST["num2"];
    $pheptinh = $_POST["pheptinh"];
    if(is_numeric($num1)&& is_numeric($num2)){
    if($pheptinh=="Addition"){
            echo "<h1>Result:</h1> $num1 + $num2 = ".($num1 + $num2);
    }
    if($pheptinh=="Substraction"){
            echo "<h1>Result:</h1> $num1 - $num2 = " . ($num1 - $num2);
    }
    if($pheptinh=="Multiply"){
            echo "<h1>Result:</h1> $num1 x $num2 = " . ($num1 * $num2);
    }
    if($pheptinh=="Division"){
        try {
            if($num2 === 0) {
                throw new Exception("Can't division by 0");
            }
            echo "<b>Result:</b><br>";
            echo $num1 / $num2;
        } 
        catch(Exception $e) {
            echo 'Message: ' .$e->getMessage();
        }
    }
}
}
?>