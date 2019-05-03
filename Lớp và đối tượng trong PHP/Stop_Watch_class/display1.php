<!DOCTYPE html>
<html>
<head>
	<title>StopWatch</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>	
</head>
<body >
    <?php  
    // include "display.php";
    if(isset($_POST['acess_stoptime'])){

        $stoptime =  date('s');
        $starttime = $_POST['bienphp'];
    }
    echo "Start at: " .$starttime ."<br>" ."Stop at: " .$stoptime ."<br>";
    if($starttime<=$stoptime){
    echo "  Đã đếm được: " .($stoptime -  $starttime ) ."s";
    }
    else{
    echo "  Đã đếm được: " .((60- $starttime )+$stoptime) ."s";
    }
 ?>
</body>
</html>	