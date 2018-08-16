<?php require ("header.php");
	  require ("..\php\server.php");


if ($_GET['id']) {
$P_ID = $_GET['id'];

$query = "SELECT * FROM products WHERE P_ID = '$P_ID'";
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
				<form method = "post" action = "..\php\update_prd.php">
					<legend class = "uk-legend">Edit a product</legend>
						<div class = "uk-margin">
							<input class = "uk-input uk-form-width-large" type="text" name="P_NAME" placeholder= "Product name" value = "<?php echo $data['P_NAME']?>" required>
						</div>
						<div class = "uk-margin">
							<input class = "uk-input uk-form-width-large" type = "text" name = "P_PRICE" placeholder = "Price" value = "<?php echo isset($data['P_PRICE']) ? $data['P_PRICE'] : ''; ?>"required>
						</div>
						<div class = "uk-margin">
							<input type="hidden" name="P_ID" value="<?php echo $data['P_ID'] ?>" />
							<button class="uk-button uk-button-primary" type="submit" name = "update">Submit</button>
						</div>
				</form>

			</div>
			</div>
		</div>

		</div>


</body>
</html>