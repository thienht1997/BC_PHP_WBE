<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>In số nguyên tố nhỏ hơn 100</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<?php
if (isset($_POST['submit'])){
    $num = $_POST['input'];
function isPrimeNumber($n){
    if ($n < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++){
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}
$count =0;
$n =2;
while ($count < $num) {
            if (isPrimeNumber($n)) {
                echo "$n </br>";
                $count++;
            } 
            $n++;
        }
    }        
 ?>       
</body>
</html>