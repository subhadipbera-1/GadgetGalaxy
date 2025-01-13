<!-- <?php
// $con=mysqli_connect("localhost","root","","ecom");
// if(!$con){
//     die("Connection Unsuccessful.".mysqli_connect_error());
// }
// include("db1_connection.php");
// connection();
// global $conn;

// $name=$_POST['name'];
// $email=$_POST['email'];
// $phone=$_POST['phone'];
// $dob=$_POST['dob'];
// $add1=$_POST['add1'];
// $add2=$_POST['add2'];
// $city=$_POST['city'];
// $region=$_POST['region'];
// $code=$_POST['code'];
// $repass=$_POST['urepass'];
// $image=$_FILES['image']['name'];
// $tempname=$_FILES['image']['tmp_name'];
// $folder="images/".$image;
// move_uploaded_file($tempname,$folder);
// $sql="INSERT INTO data(name,email,password,image) VALUES('".$name."','".$email."','".$repass."','".$image."')";
// $query=mysqli_query($conn,$sql);
// if($query){
//     echo "<script>alert('Registration Successful.');window.location.href='login.php';</script>";
// }
// else{
//     echo "<script>alert('Sorry, Registration Unsuccessful.');window.location.href='registration.php';</script>";
// }

?> 

<?php
include('db1_connection.php'); // Include your database connection script
global $conn;
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Retrieve form data
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['upass']);
    $confirm_password = mysqli_real_escape_string($conn, $_POST['urepass']);
    $image = $_FILES['image']['name'];
    
    // Validate form data
    if (empty($name) || empty($email) || empty($password) || empty($confirm_password)) {
        echo "All fields are required.";
        exit;
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit;
    }

    // Check if passwords match
    if ($password !== $confirm_password) {
        echo "Passwords do not match.";
        exit;
    }

    // Hash password for security
    // $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Image upload logic (optional field)
    $target_dir = "images/";
    $target_file = $target_dir . basename($image);
    $uploadOk = 1;

    // Check if image is uploaded
    if (!empty($image)) {
        // Validate image type
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $valid_extensions = array("jpg", "jpeg", "png", "gif");

        // Check if it's a valid image file
        if (in_array($imageFileType, $valid_extensions)) {
            // Move uploaded file to server
            if (!move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                echo "There was an error uploading your file.";
                exit;
            }
        } else {
            echo "Only JPG, JPEG, PNG, and GIF files are allowed.";
            exit;
        }
    } else {
        // Set a default image if none is uploaded
        //$image = "../assets/img/no-image.png";
        $image = "no-image.png";
    }

    // Insert the user into the database
    $sql = "INSERT INTO data (name, email, password, image) VALUES ('$name', '$email', '$confirm_password', '$image')";

    if (mysqli_query($conn, $sql)) {
        echo "Registration successful!";
        header("Location: login.php"); // Redirect to a success page or login page
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close database connection
    mysqli_close($conn);
}
?>

