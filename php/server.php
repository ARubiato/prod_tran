<?php
$conn = mysqli_connect('localhost','root','','store') or die ("Error in connecting database" .mysqli_error());


if (isset($_POST['submit'])) {
    $P_NAME = isset($_POST['P_NAME']) ? $_POST['P_NAME'] : "";
    $P_PRICE = isset($_POST['P_PRICE']) ? $_POST['P_PRICE'] : "";

    $pquery = "INSERT INTO products (P_NAME, P_PRICE) VALUE ('$P_NAME', '$P_PRICE' )";
    $results = mysqli_query($conn,$pquery);
    header('Location: index.php');

    if($results) {
        echo "Input successfully added";
    } else {
        echo mysqli_error();
     }
}


?>