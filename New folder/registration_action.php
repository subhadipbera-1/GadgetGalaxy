<?php
$con=mysqli_connect("localhost","root","","subhadip");
if(!$con){
    die("Connection Unsuccessful.".mysqli_connect_error());
}


$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$dob=$_POST['dob'];
$add1=$_POST['add1'];
$add2=$_POST['add2'];
$city=$_POST['city'];
$region=$_POST['region'];
$code=$_POST['code'];
$repass=$_POST['urepass'];

$sql="INSERT INTO user(name,email,phone_no,dob,address1,address2,city,region,pin,password) VALUES('".$name."','".$email."','".$phone."','".$dob."','".$add1."','".$add2."','".$city."','".$region."','".$code."','".$repass."')";
$query=mysqli_query($con,$sql);
if($query){
    echo "<script>alert('Registration Successful.');window.location.href='login.html';</script>";
}
else{
    echo "<script>alert('Sorry, Registration Unsuccessful.');window.location.href='registration.html';</script>";
}

?>