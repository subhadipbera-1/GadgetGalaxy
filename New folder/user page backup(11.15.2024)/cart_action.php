<?php

include('user_function.php');
if(isset($_SESSION['username'])){

    $u_id=$_GET['u_id'];
    $p_id=$_GET['pid'];

    $insert=InsertCartProduct($u_id,$p_id);

    if ($insert) {
            echo "<script>alert('Product add to cart successful.');
            window.location.href='cart.php';</script>";
        }
        else {
            echo "<script>alert('Sorry, product add to cart Un-successful.');
            window.location.href='productdetails.php';</script>";
    }
}
else{
    echo "<script>alert('First Login.');
         window.location.href='login.php';</script>";
}

?>


