<?php
require '..\php\server.php';

if(isset($_POST['update'])){
if($_POST) {
    $P_NAME = $_POST['P_NAME'];
    $P_PRICE = $_POST['P_PRICE'];
    $P_ID = $_POST['P_ID'];

    $query = "UPDATE products SET P_NAME = '$P_NAME', P_PRICE = '$P_PRICE' where P_ID = '$P_ID'";
    if(mysqli_query($conn,$query)) {
        
    }
    echo "Data succesfully updated";
}

header('location:..\index.php');
}



?>