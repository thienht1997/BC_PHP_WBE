	<?php
		if (isset($_POST['submit']))
		{
   			$sodautien = $_POST["sodautien"];
   			$sothuhai = $_POST["sothuhai"];
   			$sothuba = $_POST["sothuba"];
   			$tinh = $sodautien + ($sodautien * $sothuhai * 0.01);
       	}
 		echo "
 					<d1 style='font-size: 17px'>Máy tính giá trị tương lai</d1> <br>
 					<d1 style='font-size: 17px'>Số tiền đầu tư: $sodautien$</d1> <br>
 					<d1 style='font-size: 17px'>Lãi suất hằng năm: $sothuhai %</d1></br>
 					<d1 style='font-size: 17px'>Số năm: $sothuba</d1></br>
 					<d1 style='font-size: 17px'>Giá trị tương lai: $tinh$</d1></br>"
?>