<?php
		 if (isset($_POST['submit'])){
 		  for($i=0; $i<5; $i++){
			   for($j=0; $j<20; $j++){
				   echo '*';
			   }
			   	   echo '<br>';
		   }
		 }
		 elseif (isset($_POST['submit1'])){
			for ($i = 0; $i < 8; $i++){
                for ($j = 0; $j <= $i; $j++) {
                    echo " * ";
                }
                echo "<br>";
		}
	}
		elseif (isset($_POST['submit2'])){
			for ($i = 8; $i > 0; $i--) {
                for ($j = 0; $j < $i; $j++) {
                    echo " * ";
                }
                echo "<br>";
            }
	}
?>