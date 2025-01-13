<?php
$con=mysqli_connect("localhost","root","","subhadip");
if(!$con){
    die("Connection Unsuccessful.".mysqli_connect_error());
}


$name=$_POST['uname'];
$email=$_POST['uemail'];
$phone=$_POST['uphone'];
$dob=$_POST['dob'];
$cpassword=$_POST['cpassword'];

$sql="INSERT INTO user(name,email,phone_no,dob,password) VALUES('".$name."','".$email."','".$phone."','".$dob."','".$cpassword."')";

$query=mysqli_query($con,$sql);
if($query){
    echo "Data Inserted Successfully";
    }else{
        echo "Data Insertion Failed";
        }


// $sql="INSERT INTO user(name,email,phone_no,dob,password) VALUES('".$name."','".$email."','".$phone."','".$dob."','".$cpassword."')";
// $query=mysqli_query($con,$sql);
// if($query){
//     echo "<script>alert('Registration Successful.');window.location.href='login.php';</script>";
// }
// else{
//     echo "<script>alert('Sorry, Registration Unsuccessful.');window.location.href='registration.php';</script>";
// }
?>