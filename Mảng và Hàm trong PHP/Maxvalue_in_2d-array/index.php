<?php
$Number= array(
        array(3,2,1,4),
        array(4,5,6,3));
$max = $Number[0][0];
for ($i = 0;$i< 2;$i++){
    $Number1= count($Number[$i]);
    for($j=0;$j<count($Number[$i]);$j++){
        if($Number[$i][$j]>$max)
            $max = $Number[$i][$j];
    }
}
        echo $max;
?>


