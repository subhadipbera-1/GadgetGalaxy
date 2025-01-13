<?php
session_start();
include('user_function.php');
// if(isset($_SESSION['username'])){


//     // $u_id=$_GET['u_id'];
//     $u_id=$_SESSION['id'];
//     $p_id=$_GET['pid'];

//     $insert=InsertCartProduct($u_id,$p_id);

//     if ($insert) {
//             echo "<script>alert('Product add to cart successful.');
//             window.location.href='cart.php';</script>";
//         }
//         else {
//             echo "<script>alert('Sorry, product add to cart Un-successful.');
//             window.location.href='productdetails.php';</script>";
//     }
// }
// else{
//     echo "<script>alert('First Login.');
//          window.location.href='login.php';</script>";
// }


if (isset($_SESSION['username'])) {
    $u_id = $_SESSION['id'];
    $p_id = $_GET['pid'];

    // Check if the product is already in the cart
    $productExists = CheckProductInCart($u_id, $p_id);

    if ($productExists) {
        echo "<script>alert('Product is already in the cart.');
        window.location.href='cart.php';</script>";
    } else {
        $insert = InsertCartProduct($u_id, $p_id);

        if ($insert) {
            echo "<script>alert('Product added to cart successfully.');
            window.location.href='cart.php';</script>";
        } else {
            echo "<script>alert('Sorry, product add to cart unsuccessful.');
            window.location.href='productdetails.php';</script>";
        }
    }
} else {
    echo "<script>alert('Please log in first.');
         window.location.href='login.php';</script>";
}



?>


