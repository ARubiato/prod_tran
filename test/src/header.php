<?php
	  require "php\server.php";

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible">
    <title></title>
    <link rel = "stylesheet" href = "./css/uikit.min.css">
	<script src="./js/uikit.min.js"></script>
    <script src="./js/uikit-icons.min.js"></script>
</head>
<body>
<div class = "uk-card-header">
				<div class = "uk-card-title">
				<h4>"SOME SYSTEM TITLE" SYSTEM</h4>
			    </div>

				<hr>

				<nav class = "uk-navbar-container" uk-navbar="mode:click">
					<div class = "uk-navbar-left">
						<ul class = "uk-navbar-nav">
							<li>
								<a href = "#">Products</a>
								<div class = "uk-navbar-dropdown">
									<ul class = "uk-nav uk-navbar-dropdown-nav">
										<li><button class = "uk-button uk-button-default" name = "add">Add products</button></li>
										<li><a href = "#" name = "add">Add products</a></li>
										<li><a href = "src\view_prd.php" name = "view">View products</a></li>
									</ul>
								</div>
							</li>
							<li>
								<a href = "#">Transactions</a>
								<div class = "uk-navbar-dropdown">
									<ul class = "uk-nav uk-navbar-dropdown-nav">
										<li><a href = "#">Transact</a></li>
										<li><a href = "#">View Transactions</a></li>
									</ul>
								</div>
						</ul>
					</div>
				</nav>
				<hr>
    </div>
    
</body>
</html>
