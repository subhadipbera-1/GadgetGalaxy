<?php
//include('db1_connection.php');
include('user_function.php');

global $conn;
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Retrieve form data
    $user_id = $_POST['user_id'];
    $uadd =  $_POST['uadd'];
    $payment=$_POST['payment_method'];
    $d_date=$_POST['d_date'];
    $amount=$_POST['amount'];
    if(isset($_POST['p_id']))
    {
        $pid = $_POST['p_id'];
     


    $sql = "INSERT INTO orders (user_id,p_id, address_id,payment_method,delevery_date,amount) VALUES ('".$user_id."', '".$pid."', '".$uadd."', '".$payment."','".$d_date."','".$amount."')";
    $query = mysqli_query($conn, $sql);
    if($query){
        
        
        // echo"<script>alert('Order placed Successfully.');
            // window.location.href='thank_you.php';</script>";
            header("Location:thank_you.php");
    }
    else{
        // echo "Order Not Successfull";
        echo"<script>alert('Order Not Successfully.');
            window.location.href='index.php';</script>";
    }

}
    
    else{
        $pid = $_POST['pid'];
        
            $call=fetchCartRec($user_id);
            foreach($call as $val){
                $pid=$val['p_id'];
                $price=$val['price'];
                
                $sql="INSERT INTO orders(user_id,p_id,amount,payment_method,delevery_date,address_id) VALUES('".$user_id."', '".$pid."', '".$price."','".$payment."','".$d_date."','".$uadd."')";
                $query = mysqli_query($conn, $sql);
            if($query){
                
                
                // echo"<script>alert('Order placed Successfully.');
                    // window.location.href='thank_you.php';</script>";
                    header("Location:thank_you.php");
            }
            else{
                // echo "Order Not Successfull";
                echo"<script>alert('Order Not Successfully.');
                    window.location.href='index.php';</script>";
            }
            }
        
    }
}
    



?>