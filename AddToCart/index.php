
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
		<a href="ViewCart.php" class="btn btn-warning col-lg-2">Cart<span class="badge badge-secondary"></span></a>
	</center>
	<br><br>
	<form method="post" action="addToCart.php">
		<table class="table">
			<thead>
				<tr>
					<th>Name</th>
					<th>Image</th>
					<th>Price</th>				
				</tr>			
			</thead>
			<tbody>
				<tr>
					<td>T-Shirt</td>
					<td><img src="Images/a1.jpg" height="" width="20%"></td>
					<td>1000/-</td>

				</tr>
				<tr>
					<td>Quantity</td>
					<td><input type="number" name="quantity" class="form-control col-lg-6"></td>
					<input type="hidden" name="name" value="T-Shirt">
					<input type="hidden" name="price" value="1000">
					<td><input type="submit" value="Add To Cart" name="addcart" class="btn btn-primary"></td>
				</tr>
			</tbody>
		</table>
	</form>
</div>
</body>
</html>