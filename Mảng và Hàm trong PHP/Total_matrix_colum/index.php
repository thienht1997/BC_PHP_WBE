<?php
$array = array(
    array(3,2,1,4),
    array(3,2,1,4),
    array(3,2,1,4),
    array(4,5,6,3));
$total = 0;
for ($i = 0;$i< 4;$i++){
    for($j=0;$j < 4;$j++)
        if($j == 0)
            $total = $total + $array[$i][$j];}
echo $total;
?>