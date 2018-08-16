<?php
require '..\php\server.php';

if($_POST) {
    $P_NAME = $_POST['P_NAME'];
    $P_PRICE = $_POST['P_PRICE'];
    $P_ID = $_POST['P_ID'];

    $query = "UPDATE products SET P_NAME = '$P_NAME', P_PRICE = '$P_PRICE' where P_ID = '$P_ID'";
    mysqli_query($conn,$query);
    header('location:..\index.php');
}



?>