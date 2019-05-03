<?php
if (isset($_POST['submit'])){
$string = "Detele character in array";
$input = $_POST['input'];
$count = 0;
for ($i= 0; $i< strlen($string); $i++){
	if($string[$i] == $input){
		$count +=1;
	}
}
echo "Phần tử " .$input ." xuất hiện " .$count ." lần";
}
?>