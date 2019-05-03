<!DOCTYPE html>
<html>
<head>
    <title> Caculator </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<form method="POST" action= "display.php">
<div>
<d1>Amount</d1>
		<input type="text" name= "text">

<d2>From Currency</d2>
	<select name="select1">
  	<option>USD</option>
  	<option>VND</option>
	</select>

<d3>To Currency</d3>	
	<select name="select2">
  	<option>USD</option>
  	<option>VND</option>	
	</select>	
     
        <input type="submit" name="submit" value = "Convert" onclick="Change()"/>
<!-- <script>
	function Change() {
	if (document.getElementById("a").value == "USD" &&  document.getElementById("b").value == "VND"){
	ketqua.value=+eval(ketqua.value)*24000;
	}
	else if (document.getElementById("a").value == "VND" && document.getElementById("b").value == "USD"){
	ketqua.value=+eval(ketqua.value)/24000;
	}
	else 
	ketqua.value=+eval(ketqua.value);
	}
</script> -->

</div>
</form>
</body>
</html>