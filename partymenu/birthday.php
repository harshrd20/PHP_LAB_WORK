<!DOCTYPE html>
<html>
<head>
	<style>
		h1{
			text-align:center;
		}
		h1{
			background-color:yellow;
			color: darkbrown;
			margine: 20px;
			padding: 40px;

		}
		td, th{
			border-left: 1px solid #000;
			color: #ff0406;
		}
		th{
			border-bottom: 1px solid #000;
			border-top: 1px solid #000;
			border-right: 1px solid #000;
			color: rgb(107,142,35);
		}
	</style>
</head>
<body>
	<form method = "post">
		<h1>BIRTHDAY_PARTY MENU</h1>
		<div class = "container">
			<table>
				<tr>
					<th>S.NO.</th>
					<th>Name</th>
					<th>Price</th>
					<th>Quantity</th>
				</tr>
				<tr>
					<th>1.</th>
					<td>GoodReach Bread</td>
					<td>85Rs/Kg</td>
					<td><input type = "number" name = "P1"/></td>
				</tr>
				<tr>
					<th>2.</th>
					<td>Mithoo Bread</td>
					<td>55Rs/Kg</td>
					<td><input type = "number" name = "P2"/></td>
				</tr>
				<tr>
					<th>3.</th>
					<td>GoodReach Cake</td>
					<td>550Rs/Kg</td>
					<td><input type = "number" name = "P3"/></td>
				</tr>
				<tr>
					<th>4.</th>
					<td>Mithoo Cake</td>
					<td>500Rs/Kg</td>
					<td><input type = "number" name = "P4"/></td>
				</tr>
				<tr>
					<th>5.</th>
					<td>Eclairs Toffee</td>
					<td>1Rs/pes</td>
					<td><input type = "number" name = "P5"/></td>
				</tr>
				<tr>
					<th>6.</th>
					<td>Party Popper</td>
					<td>60Rs</td>
					<td><input type = "number" name = "P6"/></td>
				</tr>
				<tr>
					<th>7.</th>
					<td>Balloons</td>
					<td>50Rs/poc</td>
					<td><input type = "number" name = "P7"/></td>
				</tr>
				<tr>
					<th>
					<?php
						if(isset($_POST['submit'])){
							$rate = array(85, 55, 550, 500, 1, 60, 50);
							$sum = 0;
							$i = 1;
							foreach($rate as $x){
								$str = "P" . $i;
								$sum += $x * $_POST[$str];
								$i++;
							}
							echo "Total : ";
							echo "<th>".$sum."</th>";
						}

					?>
					</th>
				</tr>
			</table>
			<input type = "submit" name = "submit"/>
		</div>
		</form>
</body>
</html>
