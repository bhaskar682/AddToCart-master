<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<h1 class="text-center">Shopping Cart</h1>
	<center>
		<a href="index.php" class="btn btn-warning col-lg-2">Home</a>
		<a href="ViewCart.php" class="btn btn-warning col-lg-2">Cart</a>
	</center>
	<br><br>
	<h2 align="center">Your Cart</h2>
	<table class="table">
		<thead>
			<tr>
				<th>SR No.</th>
				<th>Name</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Total Price</th>
				<th>Update</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$bill = 0;
			$nu =1;
				foreach($_SESSION as $products)
				{
					$p=0;
					$q=0;
					echo '<tr>';
					echo '<td>'; echo $nu++; '</td>';
					echo "<form action='editCart.php' method='post'>";
					foreach($products as $key => $value)
					{
						if($key == 2)
						{
							echo "<td><input type='number' name='name$key' value='".$value. "'> </td>";
							$q=$value;
						}
						else if($key == 1)
						{
							echo "<td><input type='hidden' name='name$key' value='".$value. "'> </td>";
							echo "<td>".$value."</td>";
							$p=$value;
						}
						else if($key == 0)
						{
							echo "<td><input type='hidden' name='name$key' value='".$value. "'> </td>";
							echo "<td>".$value."</td>";
							
						}
					}
				
					$bill = ($p * $q);
					echo "<td>".$bill."</td>";
					echo '<td><input type="submit" name="submit" value="Update" class="btn btn-warning"></td>';
					echo '<td><input type="submit" name="submit" value="Delete" class="btn btn-danger"></td>';
					echo "</form>";
					echo '<tr>';		
				}

			?>			
		</tbody>

