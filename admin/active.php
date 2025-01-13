<?php
include('../db1_connection.php');

$destination_id  = $_GET['pid'];
$status= $_GET['active'];
$updatequery1 = "UPDATE products SET active=$status WHERE p_id =$destination_id ";
mysqli_query($conn,$updatequery1);
header('location:all_product.php');

?>