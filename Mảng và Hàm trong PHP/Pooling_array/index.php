<?php
$array1 = [1,7,2,4,4,8];
$array2 = array(2,7,3,4,5,6);
$array3 = $array1;
$index = 0;
for ($i = count($array1); $i < count($array1) + count($array2); $i++) {
    $array3[$i] = $array2[$index];
    $index++;
}
echo implode(", ",$array3);
