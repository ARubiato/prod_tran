<?php
require 'server.php';

if($_GET['id']) {
    $P_ID = $_GET['id'];
    $query = "DELETE FROM products WHERE P_ID = '$P_ID'";
    mysqli_query($conn,$query);
    echo "Data successfully delete!";
    header('location: ..\index.php');
    
}
?>