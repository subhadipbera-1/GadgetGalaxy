<?php
$con = mysqli_connect("localhost", "root", "", "subhadip");

if (!$con) {
    die("Database not connected" . mysqli_connect_error());
} 

$name = $_POST["name"];
$email = $_POST["email"];
$address = $_POST["address"];
$password = $_POST["password"];
$subject = $_POST["subject"];
$gender = $_POST["gender"];

$sql = "INSERT INTO user(name,email,address,password,subject,gender) VALUES ('" . $name . "','" . $email . "','" . $address . "','" . $password . "','" . $subject . "','".$gender ."')";

$query = mysqli_query($con, $sql);

if ($query) {
    echo "<script>alert('Registration successful.');window.location.href ='reg.php';</script>";
} else {
    echo "<script>alert('Sorry Registration successful.');window.location.href ='reg.php';</script>";
}
?>
