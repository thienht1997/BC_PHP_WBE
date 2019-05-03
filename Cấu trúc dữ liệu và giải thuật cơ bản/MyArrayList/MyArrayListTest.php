<?php
include "MyArrayList.php";
$Newarray = array(2, 4, 6, 7, 9);
$listInteger = new MyList($Newarray, 7);
$listInteger->add(1);
$listInteger->add(2);
$listInteger->add(3);
echo $listInteger->get(1); 
echo "<br>";
echo "Sức chứa = " .$listInteger->ensureCapacity();
echo "<br>";
$listInteger-> indexOf(2);
echo "Mảng nhân bản từ array gốc: " .implode(" " ,$listInteger-> clone());