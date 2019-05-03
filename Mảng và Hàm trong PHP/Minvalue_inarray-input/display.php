<?php
if (isset($_POST['submit'])){
$data = $_POST['input'];
$Number = explode(",", $data);
$length = count($Number);
$min = $Number[0];
for ($i= 0;$i< $length ; $i++) {
	if ($Number[$i] < $min  )
		 $min = $Number[$i] ;
}
echo 'Min value in array input is ' .$min;
}
?>