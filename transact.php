<?php
require 'src\header.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Transact</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="main.js"></script>
</head>
<body>  
    <div class = "uk-container">
        <div class = "uk-card">
            <div class = "uk-card-header">
                <legend class = "uk-legend">Transact</legend>
                <hr>
            </div>
                <div class = "uk-card-body">
                    <div class = "uk-margin">
                        <input class = "uk-input uk-form-width-large" type = "text" name = "T_CFN" placeholder = "Customer name" required> 
                    </div>
                    <div class = "uk-margin">
                        <input class = "uk-date" name = "T_DATE">
                    </div>
                </div>
        </div>
    </div>
    
</body>
</html>