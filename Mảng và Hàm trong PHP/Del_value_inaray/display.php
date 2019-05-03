<?php
if (isset($_POST['submit'])){
 $input = $_POST['input'];
 $numbers = array(1, 2 ,4, 7, 9, 8, 10, 15, 20, 16, 5, 4, 4, 7, 5, 8);
 $length = count($numbers);
//  implode(", ",$numbers);
 $count =0;
 for($i=0; $i< $length; $i++){
     if($input == $numbers[$i]){
         $numbers[$i] = "";
         $count++;
     }
    //  echo implode(", ",$numbers);

 }
 echo "Tìm thấy phần tử " .$count ." trong mảng: ";
 echo implode(", ",$numbers);
}
?>   