<?php
include "db1_connection.php";
//$phone=$_POST['mobile'];
$pin = $_POST['pin'];
$state=$_POST['state'];
$city=$_POST['city'];
$add = $_POST['address'];
$uid = $_POST['uid'];

$sql = "INSERT INTO address(user_id,address,pin,city,state) VALUES('".$uid."','".$add."','".$pin."','".$city."','".$state."')";
$query = mysqli_query($conn,$sql);
if($query){
    // echo "success";
    echo"<script>alert('Address add Successfully.');
            window.location.href='checkout.php';</script>";
}
else{
    //echo "not";
    echo"<script>alert('Address add Unsccessfully.');
            window.location.href='checkout.php';</script>";
}
?>