	<?php
		if (isset($_POST['submit']))
		{
   			$sodautien = $_POST["sodautien"];
   			$sothuhai = $_POST["sothuhai"];
   			$sothuba = $_POST["sothuba"];
   			$tinh = $sothuba * $sothuhai * 0.1;
   			$sothutu = $sothuhai - $tinh ;
       	}
 		echo "<table>
 			<thead>
 				<tr>
 					<th>Sản phẩm máy tính giảm giá</th>
 				</tr>
 			</thead>
 			<tbody>
 				<tr>
 					<td><span style='color:red'>Product Description: $$sodautien</span></td>
 				</tr>
 				<tr>
 					<td><span style='color:red'>Price:$sothuhai %</span></td>
 				</tr>
 				<tr>
 					<td><span style='color:red'>Discount Percent: $sothuba</span></td>
 				</tr>
 				<tr>
 					<td><span style='color:red'>Discount Amount: $$tinh</span></td>
 				</tr>
 				<tr>
 					<td><span style='color:red'>Discount Price: $$sothutu</span></td>
 				</tr>
 			</tbody>
 		</table>"
?>