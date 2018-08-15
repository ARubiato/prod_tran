<?php 
require 'php/server.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class = "uk-container">
		<div class = "uk-card">
			<div class = "uk-margin">
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
							<button class="uk-button uk-button-primary" type="submit" name = "submit">ADD</button>
						</div>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>