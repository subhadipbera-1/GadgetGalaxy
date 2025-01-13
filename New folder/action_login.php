<?php
$con = mysqli_connect("localhost", "root", "", "subhadip");

if (!$con) {
    die("Database not connected" . mysqli_connect_error());
} 

$name = $_POST["name"];
$email = $_POST["email"];


$sql = "INSERT INTO user(name,email) VALUES ('" . $name . "','" . $email . "')";

$query = mysqli_query($con, $sql);

if ($query) {
    echo "<script>alert('Registration successful.');window.location.href ='index.html';</script>";
} else {
    echo "<script>alert('Sorry Registration successful.');window.location.href ='login.php';</script>";
}
?>
