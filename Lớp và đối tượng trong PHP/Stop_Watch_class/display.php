<!DOCTYPE html>
<html>
<head>
	<title>StopWatch</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>	
</head>
<body onload = myFunction()>
	<form method="POST" action ="display1.php">
        <h1 style="font-size:36px;"> StopWatch </h1><br>
        <input type= "submit" class="btn btn-primary btn-lg" name="acess_stoptime" value="Stop">
        <input type="hidden" name="bienphp" id="bienphp" value="process" />
 	</form>
    <script>
    function myFunction() {
    var date = new Date();
    document.getElementById('bienphp').value= date.getSeconds();
    }
    </script>
    <?php  
    // if(isset($_POST['acess_starttime'])){
    //     $starttime=  date('s');
    // }
    class StopWatch
    {
        public $startTime;
        public $endTime;
        
        public function __construct($startTime, $endTime)
        {
            $this->startTime = $startTime;
            $this->endTime = $endTime;
        }
        public function  getElapsedTime()
        {
            return ($this->endTime - $this->startTime);
        }
        
    }
    echo "<br>";
    echo "Đang đếm ........";
 ?>
</body>
</html>	