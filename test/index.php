<?php require ("src\header.php");
	  require ("php\server.php");

	$vquery = "SELECT * FROM products ORDER BY P_NAME";
	$results = mysqli_query($conn,$vquery);




	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Products</title>
	
</head>
<body>
	<div class = "uk-container">
		<div class = "uk-card">
		
			<div class = "uk-card-body uk-card-muted">
				<form method = "post" action = "index.php">
					<legend class = "uk-legend">Add a product</legend>
						<div class = "uk-margin">
							<input class = "uk-input uk-form-width-large" type="text" name="P_NAME" placeholder= "Product name" required>
						</div>
						<div class = "uk-margin">
							<input class = "uk-input uk-form-width-large" type = "text" name = "P_PRICE" placeholder = "Price" required>
						</div>

						<div class = "uk-margin">
							<button class="uk-button uk-button-primary" type="submit" name = "submit">Submit</button>
						</div>
				</form>
		</div>
		
			<div class = "uk-margin">
				<table class = "uk-table">
					<thead>
						<tr>
							<th>Product ID</th>
							<th>Product Name</th>
							<th>Price</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php
					while($prdcts = mysqli_fetch_array($results)) {?>
						<tr>
							<td><?php echo $prdcts['P_ID'];?></td>
							<td><?php echo $prdcts['P_NAME'];?></td>
							<td><?php echo $prdcts['P_PRICE'];?></td>
							<td><a href = "src\index.php=?<?php echo $prdcts['P_ID'];?>" class="uk-button uk-button-primary">EDIT</a>
								<a href = "src\delete.php" class="uk-button uk-button-danger">DELETE</a>
							</td>

						</tr>
						

					<?php }?>
					</tbody>
				</table>
			</div>
		</div>
	</div>



</body>
</html>