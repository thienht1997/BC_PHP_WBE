<?php
$Number = array(-1,7,3,4,5,6);
$max = $Number[0];
for ($i= 0;$i< count($Number) ; $i++) {
	if ($Number[$i] > $max  )
		 $max = $Number[$i] ;
}
echo $max;
?>