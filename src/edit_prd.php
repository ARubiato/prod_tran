
<?php require ("header.php");
	  require ("..\php\server.php");

	$vquery = "SELECT * FROM products ORDER BY P_NAME";
	$results = mysqli_query($conn,$vquery);

	if(isset($_GET['P_ID'])) {
		$P_ID = $_GET['P_ID'];

		$query = "SELECT * from products WHERE P_ID = {$P_ID}";
		$results = mysqli_query($conn,$query);
		$data = mysqli_fetch_assoc($results);


}
	
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
				<form method = "post" action = "update_prd.php">
					<legend class = "uk-legend">Edit a product</legend>
						<div class = "uk-margin">
							<input class = "uk-input uk-form-width-large" type="text" name="P_NAME" placeholder= "Product name" value = "<?php echo $data['P_NAME']; ?>" required>
						</div>
						<div class = "uk-margin">
							<input class = "uk-input uk-form-width-large" type = "text" name = "P_PRICE" placeholder = "Price" value = "<?php echo $data['P_Price'];?>"required>
						</div>

						<div class = "uk-margin">
							<button class="uk-button uk-button-primary" type="submit" name = "submit">Submit</button>
						</div>
				</form>

			</div>
			</div>
		</div>

		</div>


</body>
</html>