<?php
include('../db1_connection.php');

$destination_id  = $_GET['cid'];
$status= $_GET['active'];
$updatequery1 = "UPDATE catagory SET active=$status WHERE id =$destination_id ";
mysqli_query($conn,$updatequery1);
header('location:catagory.php');

?>